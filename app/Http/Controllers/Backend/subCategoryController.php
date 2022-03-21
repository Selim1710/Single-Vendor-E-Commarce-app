<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class subCategoryController extends Controller
{
    public function manageSubCategory(){
        return view('admin.layouts.subCategory.subCategory_table');
    }
}
