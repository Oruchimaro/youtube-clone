<?php

namespace App\Http\Controllers;

/** */
use App\Product;
use Illuminate\Support\Collection;
/** */
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $formInput = $request->except('pro_image');

        // validating form inputs
        $this->validate($request, [
            'pro_name' => 'required',
            'pro_code' => 'required',
            'pro_price' => 'required',
            'pro_info' => 'required',
            'sale_price' => 'required',
            'pro_image' => 'image|mimes:png,jpg,jpeg|max:10000',
        ]);

        //saving image in /public/images with name of the file
        $image = $request->pro_image;
        if($image)
        {
            $imageName = $image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['pro_image'] = $imageName;
        }

        
        Product::create($formInput);
        return redirect()->back();
    }

    public function show($id)
    {
        $product = Product::findOrfail($id);
        return view('product.show', compact('product'));
    }
}
