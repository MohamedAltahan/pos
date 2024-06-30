<?php

namespace App\Http\Controllers\Install;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Throwable;
use Illuminate\Support\Str;
use mysqli;

class InstallController extends Controller
{
    protected  $envExamplePath;
    protected  $envPath;

    function __construct()
    {
        $this->envExamplePath = base_path('.env.example');
        $this->envPath = base_path('.env');
    }

    /**
     * This function deletes .env file.
     */
    private function deleteEnv()
    {
        if ($this->envPath && file_exists($this->envPath)) {
            unlink($this->envPath);
        }
        return true;
    }

    //Generate key, migrate and seed
    private function runArtisanCommands()
    {
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '512M');

        DB::statement('SET default_storage_engine=INNODB;');
        Artisan::call('migrate:fresh', ['--force' => true]);
        Artisan::call('db:seed', ['--force' => true]);
        $this->clearCache();
        //Artisan::call('storage:link');
    }

    private function clearCache()
    {
        config(['app.debug' => true]);
        //to clear cache, so that you can read from .env
        Artisan::call('optimize:clear');
    }

    public function checkSystemRequirements()
    {
        //Check existance of .env file
        return view('install.check-system-requirements');
    }

    public function selectInstallOptions()
    {
        return view('install.install-options');
    }


    public function checkEnvExampleExistance()
    {
        //Check if .env.example is present or not.
        $env_example = base_path('.env.example');
        if (!file_exists($env_example)) {
            exit("<b>.env.example file not found in <code>$env_example</code></b> <br/><br/> -
            In the downloaded codebase you will find .env.example file, please upload it and refresh this page.");
        }
    }

    public function customInstall()
    {
        $this->checkEnvExampleExistance();
        return view('install.custom-install');
    }

    public function silentInstall(Request $request)
    {

        $this->checkEnvExampleExistance();

        $request->validate(
            [
                'APP_NAME' => 'required',
            ],
            [
                'APP_NAME.required' => 'App Name is required',
            ]
        );

        $input = $request->only([
            'APP_NAME'
        ]);

        try {
            $dbName = 'db' . time();
            DB::statement("create database " . $dbName);
            DB::statement("ALTER USER 'root'@'localhost' IDENTIFIED BY 'm123456789'");
            DB::statement("FLUSH PRIVILEGES");

            //check database connection
            $this->sqlSetConfig('root', 'm123456789', $dbName, '3306', '127.0.0.1');

            //set database configurations
            $this->sqlSetConfig('root', 'm123456789', $dbName, '3306', '127.0.0.1');
            $envInputs = [
                'APP_NAME' => $request->APP_NAME,
                'APP_KEY' => 'base64:' . base64_encode(Str::random(32)),
                'DB_DATABASE' => $dbName,
                'DB_USERNAME' => 'root',
                'DB_PASSWORD' => 'm123456789'

            ];
            $this->installEnvFile($envInputs);
            //Artisan commands migrations and seeder
            $this->runArtisanCommands();
            return redirect()->route('install.success');
        } catch (Throwable $e) {
            $this->deleteEnv();
            DB::statement("ALTER USER 'root'@'localhost' IDENTIFIED BY ''");
            DB::statement("FLUSH PRIVILEGES");
            return redirect()->back()
                ->with('error', 'Something went wrong, please try again!!' . $e->getMessage());
        }
    }


    public function saveInstallData(Request $request)
    {
        try {

            ini_set('max_execution_time', 0);
            ini_set('memory_limit', '512M');

            $validatedData = $request->validate(
                [
                    'APP_NAME' => 'required',
                    'DB_DATABASE' => 'required',
                    'DB_USERNAME' => 'required',
                    'DB_HOST' => 'required',
                    'DB_PORT' => 'required',
                    'APP_URL' => 'required'
                ],
                [
                    'APP_NAME.required' => 'App Name is required',
                    'DB_DATABASE.required' => 'Database Name is required',
                    'DB_USERNAME.required' => 'Database Username is required',
                    'DB_HOST.required' => 'Database Host is required',
                    'DB_PORT.required' => 'Database port is required',
                    'APP_URL.required' => 'APP URL is required',
                ]
            );

            $input = $request->only([
                'APP_NAME', 'DB_HOST', 'DB_PORT', 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD',
                'MAIL_MAILER',
                'MAIL_FROM_ADDRESS', 'MAIL_FROM_NAME', 'MAIL_HOST', 'MAIL_PORT', 'MAIL_ENCRYPTION',
                'MAIL_USERNAME', 'MAIL_PASSWORD', 'APP_URL'
            ]);
            $input['APP_KEY'] = 'base64:' . base64_encode(Str::random(32));

            $this->checkDatabaseConnection($input['DB_USERNAME'], $input['DB_PASSWORD'], $input['DB_DATABASE'], $input['DB_PORT'], $input['DB_HOST']);
            //set database configration
            $this->sqlSetConfig($input['DB_USERNAME'], $input['DB_PASSWORD'], $input['DB_DATABASE'], $input['DB_PORT'], $input['DB_HOST']);

            $this->installEnvFile($input);

            //Artisan commands migrations and seeder
            $this->runArtisanCommands();
            return redirect()->route('install.success');
        } catch (Throwable $e) {
            $this->deleteEnv();

            return redirect()->back()
                ->with('error', 'Something went wrong, please try again!!' . $e->getMessage());
        }
    }

    public function installSuccess()
    {
        return view('install.install-success');
    }

    public function sqlSetConfig($userName, $password, $databaseName, $port = '3306', $host = '127.0.0.1')
    {
        DB::purge('mysql');
        Config::set('database.connections.mysql.username', $userName);
        Config::set('database.connections.mysql.password', $password);
        Config::set('database.connections.mysql.database', $databaseName);
        Config::set('database.connections.mysql.post', $port);
        Config::set('database.connections.mysql.host', $host);
        DB::reconnect('mysql');
    }

    public function installEnvFile(array $envInputs)
    {

        $env_lines = file($this->envExamplePath); //as array
        //user inupt array
        foreach ($envInputs as $index => $value) {
            //.env example file as lines each line is key and value
            foreach ($env_lines as $key => $line) {
                //Check if present then replace it.
                if (strpos($line, $index) !== false) {
                    $env_lines[$key] = $index . '="' . $value . '"' . PHP_EOL;
                }
            }
        }

        $openEnvFile = fopen($this->envPath, 'w');
        //concatinate env array to make final file
        fwrite($openEnvFile, implode('', $env_lines));
        fclose($openEnvFile);
    }

    public function checkDatabaseConnection($userName, $password, $databaseName, $port = '3306', $host = '127.0.0.1')
    {
        //Check for database details
        new mysqli($userName, $password, $databaseName, $port, $host);

        if (mysqli_connect_errno()) {
            $msg = '<b>ERROR</b>: Failed to connect to MySQL: ' . mysqli_connect_error();
            $msg .= "<br/>Provide correct details for 'Database Host', 'Database Port', 'Database Name', 'Database Username', 'Database Password'.";

            return redirect()
                ->back()
                ->with('error', $msg);
        }
    }
}
