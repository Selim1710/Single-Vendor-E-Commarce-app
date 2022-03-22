<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function manageSubCategory(){
        return view('admin.layouts.subCategory.subCategory_table');
    }
    public function addSubCategory(){
        return view('admin.layouts.subCategory.add_subCategory');
    }
}
