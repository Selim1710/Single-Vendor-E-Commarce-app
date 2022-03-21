<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function manageStock(){
        return view('admin.layouts.stock.stock_table');
    }
}
