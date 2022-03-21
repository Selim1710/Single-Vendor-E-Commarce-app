<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function manageCategory(){
        return view('admin.layouts.category.category_table');
    }
}
