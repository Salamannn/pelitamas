@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @push('head')
        <style>
            .why-choose-us {
                background-color: #f8f9fa;
                padding: 60px 0;
            }

            .feature-icon {
                font-size: 2rem;
                color: #007bff;
            }

            .feature-box:hover .feature-icon {
                transform: scale(1.2);
                transition: 0.3s;
            }

            .image-container img {
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
        </style>

        @php
            $banners = \App\Models\Banner::where('page', 'home')->get()->all();
        @endphp

        <div class="banner header-text">
            <div class="owl-banner owl-carousel">
                @foreach ($banners as $banner)
                    <div class="banner-item">
                        <div class="container">
                            <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}">
                            <div class="text-content">
                                <h4>{{ $banner->title }}</h4>
                                <h2>{{ $banner->subtitle }}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <section class="why-choose-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 image-container">
                        <img src="{{ asset('assets/images/pabrik.jpg') }}" alt="Pabrik Genteng" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-4">Kenapa Memilih Kami?</h2>
                        <p>Kami berkomitmen untuk menghadirkan produk berkualitas tinggi dengan harga terbaik. Dengan pengalaman
                            dalam industri material bangunan, kami memastikan setiap produk memiliki daya tahan, estetika, dan
                            keunggulan yang memenuhi standar tertinggi.</p>
                        <div class="row mt-4">
                            <div class="col-md-12 mb-3 feature-box d-flex align-items-center">
                                <i class="feature-icon bi bi-hammer pe-3"></i>
                                <div>
                                    <h5>Kualitas Premium</h5>
                                    <p class="mb-0">Menggunakan bahan baku terbaik dan proses produksi modern.</p>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 feature-box d-flex align-items-center">
                                <i class="feature-icon bi bi-tags pe-3"></i>
                                <div>
                                    <h5>Harga Kompetitif</h5>
                                    <p class="mb-0">Langsung dari pabrik untuk harga yang lebih hemat.</p>
                                </div>
                            </div>
                            <div class="col-md-12 feature-box d-flex align-items-center">
                                <i class="feature-icon bi bi-house pe-3"></i>
                                <div>
                                    <h5>Tahan Lama & Kokoh</h5>
                                    <p class="mb-0">Dirancang untuk daya tahan tinggi terhadap cuaca ekstrem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                            <a href="{{ route('product.show', $product->id) }}">
                                <div class="product-item">
                                    <img src="{{ asset('storage/' . $product->image) }}"
                                        alt="{{ $product->name }} tahan lama dengan harga terbaik di Malang">
                                    <div class="down-content">
                                        <h4 class="product-name">{{ $product->name }}</h4>
                                        <h6 class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</h6>
                                        <p>{{ Str::limit($product->description, 80) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endsection
