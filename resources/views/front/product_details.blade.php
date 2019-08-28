@extends('front.master')

@section('content')
    
<div style="margin-top: 100px;"></div>

<div style="width:60rem">
    <img src=" {{ url('images')}}/{{$product->pro_image }} "  alt="product image">
</div>

<div class="product-information">
         <h1>Name Of Product :</h1><h2> {{ $product->pro_name }} </h2>
         <h3>Description :</h3><p>{{ $product->pro_info }}</p>
        <h4>Price : </h4><small>{{ $product->sale_price }}</small>
</div>
@endsection