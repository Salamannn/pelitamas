@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <!-- Page Heading -->
    <div class="page-heading contact-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Contact Us</h4>
                        <h2>Let’s Get in Touch</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Location -->
    <div class="find-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126425.09210116816!2d112.51353171774551!3d-8.021182171610315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629cf8fe330d7%3A0x2d42ee7287b20105!2sPelita%20Mas!5e0!3m2!1sid!2sid!4v1734281205280!5m2!1sid!2sid" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>About our office</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eumester consectetur similique.</p>
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

    <!-- Contact Form -->
    <div class="send-message">
        <div class="container">
            <div class="section-heading">
                <h2>Send us a Message</h2>
            </div>
            <div class="row">
                <div class="col-md-8">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="" method="POST" id="contact">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input name="email" type="email" class="form-control" placeholder="E-Mail Address" value="{{ old('email') }}" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" placeholder="Subject" value="{{ old('subject') }}" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" placeholder="Your Message" required>{{ old('message') }}</textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" class="filled-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <ul class="accordion">
                        <li>
                            <a>Office Hours</a>
                            <div class="content">
                                <p>Monday - Friday: 9 AM - 5 PM<br>Saturday: 10 AM - 2 PM</p>
                            </div>
                        </li>
                        <li>
                            <a>Location</a>
                            <div class="content">
                                <p>Av. Lúcio Costa, Rio de Janeiro, Brazil</p>
                            </div>
                        </li>
                        <li>
                            <a>Contact</a>
                            <div class="content">
                                <p>Email: info@example.com<br>Phone: +123 456 789</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
