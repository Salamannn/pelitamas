@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Banner -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Products -->
    <div class="latest-products">
        <div class="container">
            <div class="section-heading">
                <h2>Latest Products</h2>
                <a href="{{ url('/products') }}">view all products <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <!-- Product Card -->
                        <div class="product-item" data-toggle="modal" data-target="#productModal{{ $product->id }}">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="">
                            <div class="down-content">
                                <h4>{{ $product->name }}</h4>
                                <h6>Rp {{ number_format($product->price, 0, ',', '.') }}</h6>
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for each product -->
                    <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="productModalLabel{{ $product->id }}">Product Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid"
                                                alt="Product Image">
                                        </div>
                                        <div class="col-md-6">
                                            <h4>{{ $product->name }}</h4>
                                            <h6>Rp {{ number_format($product->price, 0, ',', '.') }}</h6>
                                            <p>{{ $product->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="https://wa.me/6282186148884?text={{ urlencode('Halo Pelitamas, Saya ingin memesan / bertanya terkait ' . $product->name . '. Terimakasih') }}" class="btn btn-success">
                                        <i class="fa fa-whatsapp"></i>
                                        Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
