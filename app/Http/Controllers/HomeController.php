<?php

namespace App\Http\Controllers;

use App\Product;
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
        return view('front.home');
    }

    public function shop()
    {
        $products = Product::all();
        return view('front.shop', compact('products'));
    }


    public function product_detailes($id)
    {
        $product = Product::findOrfail($id);
        return view('front.product_details', compact('product'));

    }

    public function contact()
    {
        return view('front.contact');
    }
}
