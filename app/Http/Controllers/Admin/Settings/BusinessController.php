<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessController extends Controller
{

    public function getBusinessSetting()
    {
        return view('admin.settings.business.index');
    }
}
