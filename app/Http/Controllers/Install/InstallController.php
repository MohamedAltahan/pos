<?php

namespace App\Http\Controllers\Install;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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

    private function clearCache()
    {
        config(['app.debug' => true]);
        //to clear cache, so that you can read from .env
        // Artisan::call('optimize:clear');
    }

    public function index()
    {
        //Check for .env file
        $this->isInstalled();
        // $this->clearCache();

        return view('install.index');
    }
}
