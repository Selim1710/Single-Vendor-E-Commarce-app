<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function viewReport(){
        return view('admin.layouts.report.report_table');
    }
}
