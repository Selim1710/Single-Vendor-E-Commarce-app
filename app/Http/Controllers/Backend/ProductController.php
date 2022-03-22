<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function manageProduct(){
        return view('admin.layouts.product.product_table');
    }
    public function addProduct(){
        return view('admin.layouts.product.add_product');
    }
    public function editProduct(){
        return view('admin.layouts.product.edit_product');
    }
}
