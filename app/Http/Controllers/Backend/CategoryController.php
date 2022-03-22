<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function manageCategory()
    {
        $category=Category::all();
        return view('admin.layouts.category.category_table',compact('category'));
    }
    public function addCategory()
    {
        return view('admin.layouts.category.add_category');
    }
    public function store(Request $request){
        $request->validate([
            'category_name'=>'required|max:255'
        ]);

        try {
            Category::create([
                'category_name'=>$request->category_name,
            ]);
            return redirect()->route('admin.manage.category')->with('message','Category Added Successfully');
        }catch(\Throwable $throw){
            return redirect()->route('admin.manage.category')->with('message','Invalid Category Name');
        }

    }
    public function editCategory($id)
    {
        $category=Category::find($id);
        return view('admin.layouts.category.edit_category',compact('category'));
    }
    public function update(Request $request,$id){
        $category=Category::find($id);
        $category->update([
            'category_name'=>$request->category_name
        ]);
        return redirect()->route('admin.manage.category')->with('message','Category Updated');
    }
    public function delete($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('admin.manage.category')->with('error','Category deleted');
    }
}
