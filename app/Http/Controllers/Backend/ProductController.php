<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function manageProduct()
    {
        $products = Product::with('subCategory')->get();
        return view('admin.layouts.product.product_table', compact('products'));
    }
    public function add()
    {
        $products = Subcategory::with('product')->get();
        return view('admin.layouts.product.add_product', compact('products'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required|unique:products',
            'product_name' => 'required|unique:products',
            'regular_price' => 'required',
            'product_image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'product_offer' => 'required',
            'subCategory_id' => 'required',
            'product_description' => 'required',

        ]);
        
        //method we can use on request
        //guessExtension()
        //getMimeType()
        //there have different store method:store(),asStore(),storePublic()
        //move()
        //getClientOriginalName()
        //getSize()
        //getError()
        //isValid()

        $filename = '';
        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $filename = date('Ymdmhs') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/uploads/products'), $filename);
        }
        Product::create([
            'model' => $request->model,
            'product_name' => $request->product_name,
            'regular_price' => $request->regular_price,
            'product_image' => $filename,
            'product_offer' => $request->product_offer,
            'product_description' => $request->product_description,
        ]);
        return redirect()->route('admin.manage.product')->with('message', 'Product added successfully');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.layouts.product.edit_product', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'model' => $request->model,
            'product_name' => $request->product_name,
            'regular_price' => $request->regular_price,
            'product_offer' => $request->product_offer,
            'product_description' => $request->product_description,
        ]);
        return redirect()->route('admin.manage.product')->with('message', 'Product updated');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $file = public_path('uploads/products/' . $product->product_image);
        if (is_file($file)) {
            unlink($file);
            $product->delete();
            return redirect()->route('admin.manage.product')->with('error', 'Product deleted');
        } else {
            return redirect()->back()->with('error', 'File Not found');
        }
    }

    public function view($id)
    {
        $product = Product::find($id);
        return view('admin.layouts.product.view_product', compact('product'));
    }
    public function change(Request $request,$id){
        $product=Product::find($id);
        $filename = '';
        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $filename = date('Ymdmhs') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/uploads/products'), $filename);
        }
        $product->update([
            'product_image'=>$filename,
        ]);
        return redirect()->route('admin.manage.product')->with('message', 'Product Image Updated');

    }
}
