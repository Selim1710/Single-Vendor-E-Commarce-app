<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\CustomizationCategory;
use Illuminate\Http\Request;

class CustomizeController extends Controller
{
    public function customize()
    {
        $categories = CustomizationCategory::with('CustomizeProduct')->get();
        return view('website.layouts.customize',compact('categories'));
    }
    public function order()
    {
        dd('hello');
    }
}
