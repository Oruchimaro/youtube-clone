<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\address;
use App\Orders;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            $cartItems = Cart::content();
            return view('front.checkout', compact('cartItems'));
        }
        return redirect('home');
    }

    public function formValidate(Request $request)
    {
        // $this->validate($request, [
        //     'fullname' => 'required',
        //     'PINcode' => 'required',
        //     'city' => 'required',
        //     'state' => 'required',
        //     'country' => 'required',
        //     ]);

        $userid = Auth::user()->id;
        $address = new address;
        $address->fullname = $request->fullname;
        $address->state = $request->state;
        $address->city = $request->city;
        $address->PINcode = $request->pincode;
        $address->country= $request->country;
        $address->payment_type= $request->pay;
        $address->user_id = $userid;
        $address->save();

        Orders::createOrder();

        Cart::destroy();
        return redirect('thankyou');
    }
}
