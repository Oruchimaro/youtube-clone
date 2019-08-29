<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function orders()
    {
        $user_id = Auth::user()->id;
        // $orders = Orders_products::all();
        $orders = DB::table('orders_products')->leftJoin('products', 'products.id', '=', 'orders_product.products_id')
        ->leftJoin('orders', 'orders.id', '=', 'orders_product.orders_id')>where('orders.user_id', '=', $user_id)
        ->get();

        return view('profile.orders', compact('orders'));
    }

    public function address()
    {
        return view('profile.address');
    }

    public function updatePassword(Request $request)
    {
        echo 'passupdate';
    }
}
