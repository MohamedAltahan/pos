<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessController extends Controller
{

    public function getBusinessSetting()
    {
        return view('admin.business.setting');
    }
}
