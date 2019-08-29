<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::content();
        return view('cart.index', compact('cartItems'));
    }

    public function addItem($id)
    {
        // echo $id;
        $product = Product::find($id);
        Cart::add( $id,$product->pro_name, 1, $product->pro_price);
        // Cart::add( $id, $product->pro_name, 1, $product->pro_price);
        return back();

       
    }
    public function update(Request $request, $id)
    {
        Cart::update($id, $request->qty);
        return back();
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }

  
}
