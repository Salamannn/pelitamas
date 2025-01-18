@extends('layouts.app')

@section('title', 'Articles')

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
    {{-- <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Artikel</h1>

        @if ($articles->isEmpty())
            <div class="alert alert-warning text-center">
                Tidak ada artikel untuk ditampilkan.
            </div>
        @else
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            @if ($article->image)
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                    style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                            @else
                                <img src="https://via.placeholder.com/300x200" alt="Default Image"
                                    style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">
                                    {{ Str::limit($article->content, 100, '...') }}
                                </p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                            <div class="card-footer text-muted">
                                Diposting pada {{ $article->created_at->format('d M Y') }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $articles->links() }}
            </div>
        @endif
    </div> --}}

    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Artikel</h1>

        @if ($articles->isEmpty())
            <div class="alert alert-warning text-center">
                Tidak ada artikel untuk ditampilkan.
            </div>
        @else
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            @if ($article->image)
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                    style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                            @else
                                <img src="https://via.placeholder.com/300x200" alt="Default Image"
                                    style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                {{-- <p class="card-text">
                                    {{ Str::limit($article->content, 100, '...') }}
                                </p> --}}
                                <!-- Button to Open Modal -->
                                <button class="btn btn-primary" data-toggle="modal"
                                    data-target="#articleModal{{ $article->id }}">Baca Selengkapnya</button>
                            </div>
                            <div class="card-footer text-muted">
                                Diposting pada {{ $article->created_at->format('d M Y') }}
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Article -->
                    <div class="modal fade" id="articleModal{{ $article->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="articleModalLabel{{ $article->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="articleModalLabel{{ $article->id }}">{{ $article->title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{-- @if ($article->image)
                                        <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid mb-4"
                                            alt="{{ $article->title }}">
                                    @endif --}}
                                    <p>{{ $article->content }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center mt-4">
                {{ $articles->links('pagination::bootstrap-4') }}
            </div>
        @endif
    </div>


@endsection
