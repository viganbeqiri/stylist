<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {
        $data['new_arrival_products'] = Product::orderBy('id', 'desc')->take(8)->get();
        $data['popular_products']     = Product::inRandomOrder()->take(20)->get();
        $data['sliders'] = \App\Models\Slider::all();
        return view('frontend.home', $data);
    }

    public function productView($product_id)
    {
        $data['product'] = Product::where('id',$product_id)->with('category')->first();
        $data['categories'] = Category::all();
        $data['popular_products'] = Product::inRandomOrder()->take(5)->get();
        return view('frontend.product', $data);
    }

    public function productIndex(Request $request)
    {
        $query = Product::query();
        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        $data['products'] = $query->orderBy('id','desc')->paginate(12);
        $data['popular_products'] = Product::inRandomOrder()->take(5)->get();
        $data['categories'] = Category::all();
        return view('frontend.product.products', $data);
    }
}
