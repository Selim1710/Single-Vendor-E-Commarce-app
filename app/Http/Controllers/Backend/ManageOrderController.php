<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ManageOrderController extends Controller
{
    public function manageOrder(){
        $orders = Order::all();
        return view('admin.layouts.order.order_table',compact('orders'));
    }
}
