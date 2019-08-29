<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('front.home');
    }

    public function shop()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('front.shop', compact('products'));
    }


    public function product_detailes($id)
    {
        $product = Product::findOrfail($id);
        return view('front.product_details', compact('product', 'categories'));
    }

    public function contact()
    {
        return view('front.contact');
    }
}
