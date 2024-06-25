<?php

namespace App\Http\Controllers\Install;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Throwable;
use Illuminate\Support\Str;

class InstallController extends Controller
{
    /**
     * Check if project is already installed by checking the existance of
     * .env file then show 404 error
     */
    private function isInstalled()
    {
        $envPath = base_path('.env');
        if (file_exists($envPath)) {
            abort(404);
        }
    }

    /**
     * This function deletes .env file.
     */
    private function deleteEnv()
    {
        $envPath = base_path('.env');
        if ($envPath && file_exists($envPath)) {
            unlink($envPath);
        }

        return true;
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
        $this->isInstalled();
        return view('install.check-system-requirements');
    }

    public function selectInstallOptions()
    {
        $this->isInstalled();
        return view('install.install-options');
    }

    public function index()
    {
        $this->isInstalled();
        return view('install.index');
    }

    public function customInstall()
    {
        $this->isInstalled();
        //Check if .env.example is present or not.
        $env_example = base_path('.env.example');
        if (!file_exists($env_example)) {
            exit("<b>.env.example file not found in <code>$env_example</code></b> <br/><br/> -
            In the downloaded codebase you will find .env.example file, please upload it and refresh this page.");
        }
        return view('install.custom-install');
    }

    //     public function silentInstall()
    //     {
    //         $this->isInstalled();
    //         //Check if .env.example is present or not.
    //         $env_example = base_path('.env.example');
    //         if (!file_exists($env_example)) {
    //             exit("<b>.env.example file not found in <code>$env_example</code></b> <br/><br/> -
    //             In the downloaded codebase you will find .env.example file, please upload it and refresh this page.");
    //         }
    //         return view('install.details');
    //     }


    public function saveInstallData(Request $request)
    {
        $this->isInstalled();

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
            $input['APP_TIMEZONE'] = 'Africa/Caire';
            $input['APP_DEBUG'] = 'false';
            $input['APP_ENV'] = 'production';
            $input['APP_KEY'] = 'base64:' . base64_encode(Str::random(32)) . "\n" .

                //Check for database details
                $mysql_link = @mysqli_connect($input['DB_HOST'], $input['DB_USERNAME'], $input['DB_PASSWORD'], $input['DB_DATABASE'], $input['DB_PORT']);
            if (mysqli_connect_errno()) {
                $msg = '<b>ERROR</b>: Failed to connect to MySQL: ' . mysqli_connect_error();
                $msg .= "<br/>Provide correct details for 'Database Host', 'Database Port', 'Database Name', 'Database Username', 'Database Password'.";

                return redirect()
                    ->back()
                    ->with('error', $msg);
            }

            //Get .env file details and write the contents in it.
            $envPathExample = base_path('.env.example');
            $envPath = base_path('.env');
            $env_lines = file($envPathExample);

            foreach ($input as $index => $value) {
                foreach ($env_lines as $key => $line) {
                    //Check if present then replace it.
                    if (strpos($line, $index) !== false) {
                        $env_lines[$key] = $index . '="' . $value . '"' . PHP_EOL;
                    }
                }
            }

            //TODO: Remove false & automate the process of creating .env file.
            if (false) {
                // $fp = fopen($envPath, 'w');
                // fwrite($fp, implode('', $env_lines));
                // fclose($fp);

                // //Artisan commands
                // $this->runArtisanCommands();

                // return redirect()->route('install.success');
            } else {
                $this->deleteEnv();

                //Show intermediate steps if not able to copy file.
                $envContent = implode('', $env_lines);

                return view('install.envText')
                    ->with(compact('envContent', 'envPath'));
            }
        } catch (Throwable $e) {
            $this->deleteEnv();

            return redirect()->back()
                ->with('error', 'Something went wrong, please try again!!');
        }
    }
}
