<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Offer;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $categories = Category::with('subCategories')->get();
        $products = Product::with('subCategory')->get();
        return view('website.layouts.home', compact('categories', 'products'));
    }

    public function offers()
    {
        $offers = Offer::all();
        return view('website.layouts.offers', compact('offers'));
    }
    public function offerDetails($id)
    {
        $offer = Offer::find($id);
        return view('website.layouts.offer_details', compact('offer'));
    }

    public function laptopDeals()
    {
        return view('website.layouts.laptop_deals');
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
        if ($search_c1 && $search_c2 != "") {
            $products = Product::with('subCategory')->get();
            return view('website.layouts.compare_product_table', compact('products'));
        } else {
            return redirect()->route('website.home')->with('error', 'Search is empty');
        }
    }

    public function refundPolicy()
    {
        return view('website.layouts.refund_policy');
    }
    public function termsConditions()
    {
        return view('website.layouts.terms_condition');
    }


}
