<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function manageStock(){
        return view('admin.layouts.stock.stock_table');
    }
    public function addStock(){
        return view('admin.layouts.stock.add_stock');
    }
    public function editStock(){
        return view('admin.layouts.stock.edit_stock');
    }
}
