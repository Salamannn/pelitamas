@extends('layouts.app')

@section('title', $article->title)

@section('meta')
    <meta name="description" content="{{ Str::limit(strip_tags($article->content), 150) }}">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($article->content), 150) }}">
    <meta property="og:image" content="{{ asset('storage/' . $article->image) }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">
@endsection

@section('content')
    <div class="container my-5">
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
        <div class="row justify-content-center">
            <div class="col-lg-10">

                {{-- Featured Image --}}
                @if ($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded mb-4 w-100"
                        alt="{{ $article->title }}">
                @endif

                {{-- Title and Meta --}}
                <h1 class="mb-2">{{ $article->title }}</h1>
                <p class="text-muted mb-4">
                    Diterbitkan pada {{ $article->created_at->format('d M Y') }}
                </p>

                {{-- Article Content --}}
                <div class="article-body" style="line-height: 1.8;">
                    {!! nl2br(e($article->content)) !!}
                </div>

                {{-- Optional Tags or Share --}}
                <div class="mt-5 border-top pt-3">
                    <p class="mb-0">Bagikan artikel ini:</p>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                        target="_blank" class="btn btn-sm btn-primary mt-2">
                        <i class="fa fa-facebook"></i> Facebook
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . request()->url()) }}"
                        target="_blank" class="btn btn-sm btn-success mt-2">
                        <i class="fa fa-whatsapp"></i> WhatsApp
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
