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
                        <img src="{{ asset('assets/images/feature-image.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Who we are &amp; What we do?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur
                            similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem
                            perferendis dicta dolorem non blanditiis ex fugiat.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
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
                                    <h5 class="modal-title" id="articleModalLabel-{{ $article->id }}">{{ $article->title }}
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid mx-auto d-block" style="max-width: 100%; max-height: 300px; object-fit: cover;" alt="{{ $article->title }}">
                                    <p>{{ $article->content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Services -->
    <div class="services">
        <div class="container">
            <div class="row">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-gear"></i>
                            </div>
                            <div class="down-content">
                                <h4>Service {{ $i }}</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="filled-button">Read More</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Happy Clients -->
    <div class="happy-clients">
        <div class="container">
            <div class="section-heading">
                <h2>Happy Partners</h2>
            </div>
            <div class="owl-clients owl-carousel">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="client-item">
                        <img src="{{ asset('assets/images/client-01.png') }}" alt="Client {{ $i }}">
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
