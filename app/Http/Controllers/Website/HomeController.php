<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\LaptopDeal;
use App\Models\Product;
use App\Models\Offer;
use App\Models\User;
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
        $laptopDeals = LaptopDeal::where('type', 'laptop')->get();
        $tabletDeals = LaptopDeal::where('type', 'tablet')->get();
        return view('website.layouts.laptop_deals', compact('laptopDeals', 'tabletDeals'));
    }
    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('website.layouts.product_details', compact('product'));
    }
    public function cart($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('website.home')->with('error', 'there is no product into the cart');
        }
        $cartExist = session()->get('cart');
        // case-1:no cart
        if (!$cartExist) {
            $cartData = [$id => [
                'product_id' => $product->id,
                'product_model' => $product->model,
                'product_name' => $product->product_name,
                'product_image' => $product->product_image,
                'regular_price' => $product->regular_price,
                'product_offer' => $product->product_offer,
                'product_quantity' => 1,
            ]];
            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'Product added into the cart');
        }
        // case-2:already one cart exist
        if (!isset($cartExist[$id])) {
            $cartExist[$id] = [
                'product_id' => $product->id,
                'product_model' => $product->model,
                'product_name' => $product->product_name,
                'product_image' => $product->product_image,
                'regular_price' => $product->regular_price,
                'product_offer' => $product->product_offer,
                'product_quantity' => 1,
            ];
            session()->put('cart', $cartExist);
            return redirect()->back()->with('message','Product added into the cart');
        }
        // case-3: same product adding into the cart
        $cartExist[$id]['product_quantity'] = $cartExist[$id]['product_quantity']+1;
        session()->put('cart', $cartExist);
        return redirect()->back()->with('message','Product added into the cart');
    }

    public function clearCart(){
        session()->forget('cart');
        return redirect()->back()->with('error', 'Cart Cleared');
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
