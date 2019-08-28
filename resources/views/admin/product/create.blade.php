@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file"></span>
                        Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="users"></span>
                        Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2"></span>
                        Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Integrations
                        </a>
                    </li>
                    </ul>
            
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Year-end sale
                        </a>
                    </li>
                    </ul>
                </div>
            </nav> 
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="col-md-6">
                        <h1>BMW</h1>
                        <h1>Add New</h1>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true ]) !!}
                            <div class="form-group">
                                {{ Form::label('Name', 'Name') }}
                                {{ Form::text('pro_name', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('Code', 'Code') }}
                                {{ Form::text('pro_code', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('Price', 'Price') }}
                                {{ Form::text('pro_price', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('Description', 'Description') }}
                                {{ Form::text('pro_info', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('Image', 'Image') }}
                                {{ Form::file('pro_image', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('Sale Price', 'Sale Price') }}
                                {{ Form::text('sale_price', null, array('class' => 'form-control')) }}
                            </div>

                            {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection