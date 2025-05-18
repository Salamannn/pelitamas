@extends('layouts.app')

@section('title', 'Home')

@section('meta')
    <meta name="description" content="{{ Str::limit(strip_tags($product->description), 150) }}">
    <meta property="og:title" content="{{ $product->name }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($product->description), 150) }}">
    <meta property="og:image" content="{{ asset('storage/' . $product->image) }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">
@endsection

@push('head')
    <style>
        body {
            background-color: #f8f9fa;
        }
        .product-detail {
            padding: 100px 0;
        }
        .product-img {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
        }
        .product-price {
            font-size: 20px;
            font-weight: 600;
            color: #007bff;
        }
        .product-category {
            font-size: 16px;
            color: #6c757d;
        }
        .btn-whatsapp {
            background-color: #25D366;
            color: #fff;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn-whatsapp i {
            margin-right: 8px;
        }
        .btn-whatsapp:hover {
            background-color: #1ebe57;
        }
        .breadcrumb-container {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .breadcrumb-item a {
            text-decoration: none;
            color: #007bff;
        }
        .breadcrumb-item.active {
            color: #6c757d;
        }
        .footer {
            background-color: #0044cc;
            color: white;
            padding: 20px 0;
        }
        .footer a {
            color: white;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
@endpush

@section('content')
    <div class="container product-detail">
        <!-- Breadcrumb -->
        <div class="breadcrumb-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/products">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid product-img">
            </div>
            <div class="col-md-6">
                <h1 class="product-title">{{ $product->name }}</h1>
                <h6 class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</h6>
                <p class="product-category">{{ $product->description }}</p>
                <a href="https://wa.me/6282186148884?text={{ urlencode('Halo Pelitamas, Saya ingin memesan / bertanya terkait ' . $product->name . '. Terimakasih') }}" class="btn btn-whatsapp">
                    <i class="bi bi-whatsapp"></i> Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
@endsection