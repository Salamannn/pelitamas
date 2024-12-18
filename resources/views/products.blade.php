@extends('layouts.app')

@section('title', 'Our Products')

@section('content')

    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>New Arrivals</h4>
                        <h2>PT. Pelita Mas Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-4">
                        <div class="product-item">
                            <a href="#"><img src="{{ asset($product->image) }}" alt="{{ $product->name }}"></a>
                            <div class="down-content">
                                <a href="#"><h4>{{ $product->name }}</h4></a>
                                <h6>${{ $product->price }}</h6>
                                <p>{{ $product->description }}</p>
                                <ul class="stars">
                                    @for ($i = 0; $i < 5; $i++)
                                        <li><i class="fa fa-star"></i></li>
                                    @endfor
                                </ul>
                                <span>Reviews ({{ $product->reviews }})</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
