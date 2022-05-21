<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function manageCustomer(){
        $users = User::where('role','user')->get();
        return view('admin.layouts.customer.customer_table',compact('users'));
    }
}
