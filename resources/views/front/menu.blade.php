

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
{{--  <a class="navbar-brand" href="#">Navbar</a>  --}}
<a href="  {{ url('/') }}  " class="navbar-brand"> <img src="  {{ URL::asset('img/logo.jpg') }}  "  alt="logo ecom" id="logo"> </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
        <a class="nav-link" href=" {{url('/')}} " >Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href=" {{url('/shop')}} " >Shop <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href=" {{url('/about')}} " >About <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href=" {{url('/contact')}} " >Contact <span class="sr-only">(current)</span></a>
    </li>
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item"  href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
    </ul>

    {{--  <li class="list-inline-item"><a href="  {{ url('/login') }}  "> Login </a></li>  --}}
     <li class="list-inline-item"><a href="  {{ url('/cart') }}  "> View Cart <i class="fa fa-shopping-cart"></i> ({{Cart::count() }}) ({{Cart::total() }})</a></li> 

    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
</nav>