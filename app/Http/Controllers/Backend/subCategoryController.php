<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function manageSubCategory(){
        return view('admin.layouts.subCategory.subCategory_table');
    }

    public function addSubCategory(){
        $subCategories=Category::with('subCategories')->get();
        return view('admin.layouts.subCategory.add_subCategory',compact('subCategories'));
    }

    public function editSubCategory(){
        return view('admin.layouts.subCategory.edit_subCategory');
    }
}
