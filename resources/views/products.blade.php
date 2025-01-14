@extends('layouts.app')

@section('title', 'Our Products')

@section('content')

    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>New Arrivals</h4>
                        <h2>Pelita Mas Products</h2>
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
                                    <a href="https://wa.me/6282186148884?text={{ urlencode('Halo Pelitamas, Saya ingin memesan / bertanya terkait ' . $product->name . '. Terimakasih') }}"
                                        class="btn btn-success">
                                        <i class="fa fa-whatsapp"></i>
                                        Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>

@endsection
