@extends('front.master')
@section('content')
<div style="margin-top: 100px;"></div>
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @forelse ($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            @if(!$product->pro_image)
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ url('images/no-image.png') }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
            @else
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ url('images',$product->pro_image) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
            @endif
            <div class="card-body">
              <h5 class="card-title"> {{ $product->pro_name }} </h5>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ url('/product_detailes') }}/{{ $product->id }}" class="change-link-color add-to-cart">View <i class="fa fa-eye"></i></a></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ url('/cart/addItem') }}/{{ $product->id }}" class="change-link-color add-to-cart">Add To Cart <i class="fa fa-shopping-cart"></i> </a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @empty
        <h3> No Product Here Yet ...</h3>
        @endforelse
      </div>
    </div>
  </div>

</main>

@endsection