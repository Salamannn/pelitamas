@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Page Heading -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>about us</h4>
                        <h2>our company</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Background -->
    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Background</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{ asset('assets/images/pabrik.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Who we are &amp; What we do?</h4>
                        <p>{{ $company->description }}</p>
                        <ul class="social-icons">
                            @foreach ($sosialMedia as $item)
                                <li><a href="{{ $item->profile_url }}"><i class="fa fa-{{ $item->platform_name }}"></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Members -->
    <div class="team-members">
        <div class="container">
            <div class="section-heading">
                <h2>Our Team Members</h2>
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-4">
                        <article class="team-member" data-toggle="modal" data-target="#articleModal-{{ $article->id }}">
                            <div class="thumb-container">
                                <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top"
                                    alt="{{ $article->title }}">
                                <div class="down-content">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">{{ Str::limit($article->content, 100, '...') }}</p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Modal for Article -->
                    <div class="modal fade" id="articleModal-{{ $article->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="articleModalLabel-{{ $article->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="articleModalLabel-{{ $article->id }}">
                                        {{ $article->title }}
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid mx-auto d-block"
                                        style="max-width: 100%; max-height: 300px; object-fit: cover;"
                                        alt="{{ $article->title }}">
                                    <p>{{ $article->content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Services Section -->
    <div class="services">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <!-- Tampilkan ikon dari model -->
                                <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}"
                                    class="w-16 mx-auto">
                            </div>
                            <div class="down-content">
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->description }}</p>
                                @if ($service->link)
                                    <a href="{{ $service->link }}" class="filled-button">Read More</a>
                                @else
                                    <a href="#" class="filled-button">Read More</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Happy Partners -->
    <div class="happy-clients">
        <div class="container">
            <div class="section-heading">
                <h2>Happy Partners</h2>
            </div>
            <div class="owl-clients owl-carousel">
                @foreach ($partners as $partner)
                    <div class="client-item">
                        <!-- Tampilkan gambar partner -->
                        <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->title }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
