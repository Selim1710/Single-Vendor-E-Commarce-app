<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LaptopDeal;
use Illuminate\Http\Request;

class LaptopDealsController extends Controller
{

    public function manageLaptopDeal()
    {
        $deals = LaptopDeal::all();
        return view('admin.layouts.laptop_deals.laptop_deals_table', compact('deals'));
    }


    public function add()
    {
        return view('admin.layouts.laptop_deals.add_deals');
    }


    public function store(Request $request)
    {
        $request->validate([
            'offer_title' => 'required',
            'type' => 'required',
            'model' => 'required',
            'product_name' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'base_price' => 'required',
            'save_money' => 'required',
            'stock_quantity' => 'required',
            'details' => 'required',

        ]);

        $filename = '';
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdmhs') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/uploads/laptop_deals'), $filename);
        }
        LaptopDeal::create([
            'offer_title' => $request->offer_title,
            'type' => $request->type,
            'model' => $request->model,
            'product_name' => $request->product_name,
            'image' => $filename,
            'base_price' => $request->base_price,
            'save_money' => $request->save_money,
            'stock_quantity' => $request->stock_quantity,
            'details' => $request->details,
        ]);
        return redirect()->route('admin.manage.laptop.deals')->with('message', 'Laptop deals added successfully');
    }

    public function edit($id)
    {
        $deal = LaptopDeal::find($id);
        return view('admin.layouts.laptop_deals.edit_deals', compact('deal'));
    }

    public function update(Request $request, $id)
    {
        $deal = LaptopDeal::find($id);
        $deal->update([
            'offer_title' => $request->offer_title,
            'model' => $request->model,
            'product_name' => $request->product_name,
            'base_price' => $request->base_price,
            'save_money' => $request->save_money,
            'stock_quantity' => $request->stock_quantity,
            'details' => $request->details,
        ]);
        return redirect()->route('admin.manage.laptop.deals')->with('message', 'Laptop deals updated');
    }

    public function delete($id)
    {
        $deal = LaptopDeal::find($id);
        $image = str_replace('\\', '/', public_path('uploads/laptop_deals/' . $deal->image));
        if (is_file($image)) {
            unlink($image);
            $deal->delete();
            return redirect()->route('admin.manage.laptop.deals')->with('error', 'Laptop Deals deleted');
        } else {
            return redirect()->back()->with('error', 'File Not found');
        }
    }

    public function view($id)
    {
        $deal = LaptopDeal::find($id);
        return view('admin.layouts.laptop_deals.view_deals_image', compact('deal'));
    }
    public function change(Request $request, $id)
    {
        $deal = LaptopDeal::find($id);
        $filename = '';
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdmhs') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/uploads/laptop_deals'), $filename);
        }
        $deal->update([
            'image' => $filename,
        ]);
        return redirect()->route('admin.manage.laptop.deals')->with('message', 'Image changed');

    }
}
