<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $categories = Category::with('subCategories')->get();
        $products = Product::with('subCategory')->get();
        return view('website.layouts.home', compact('categories', 'products'));
    }


    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('website.layouts.product_details', compact('product'));
    }


    public function compareProduct(Request $request)
    {
        $search_c1 = $request['search_c1'] ?? "";
        $search_c2 = $request['search_c1'] ?? "";
        // remain: specific product will be show
        if($search_c1 && $search_c2!=""){
            $products = Product::with('subCategory')->get();
            return view('website.layouts.compare_product_table',compact('products'));
        }else{
            return redirect()->route('website.home')->with('error','Search is empty');
        }


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
