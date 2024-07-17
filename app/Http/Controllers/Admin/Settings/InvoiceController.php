<?php

namespace App\Http\Controllers\Admin\Settings;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{
    public function getInvoiceSetting(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.settings.invoice.index');
    }
}