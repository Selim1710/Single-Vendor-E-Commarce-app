<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function viewReport(Request $request)
    {
        $from = $request->from_date;
        $to = $request->to_date;
        if($from && $to){
            $orders = Order::whereDate('created_at',[$from, $to])->get();
            return view('admin.layouts.report.report_table', compact('orders'));
        }
        return view('admin.layouts.report.report_table');
    }
    // other where clause: whereBetween, whereIn, whereNotIn, whereNull, whereNotNull, whereDate, whereMonth, whereDay, whereYear, whereTime, whereColumn , whereExists, whereRaw.
}
