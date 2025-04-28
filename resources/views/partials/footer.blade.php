
@php
    $company = \App\Models\CompanyProfile::first();
@endphp
<!-- Footer Start -->
<div class="container-fluid footer mt-5 pt-5 wow fadeIn" style="background-color: #007bff; color: white;" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-4">
                <h5 class="mb-4" style="color: white;">Address</h5>
                <p class="mb-2" style="color: white;"><i class="fa fa-map-marker-alt me-3 m-1" style="color: white;"></i>{{ $company->address}}</p>
                <p class="mb-2" style="color: white;"><i class="fa fa-phone-alt me-3 m-1" style="color: white;"></i>{{ $company->phone}}</p>
                <p class="mb-2" style="color: white;"><i class="fa fa-envelope me-3 m-1" style="color: white;"></i>{{ $company->address}}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social m-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social m-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social m-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <h5 class="mb-4" style="color: white;">Quick Links</h5>
                <a class="btn btn-link" style="color: white;" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" style="color: white;" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link" style="color: white;" href="{{ route('products') }}">Our Product</a>
            </div>
            <div class="col-lg-4 col-md-4 mb-5">
                <h5 class="mb-4" style="color: white;">Maps</h5>
                    {!! $company->google_maps !!}
            </div>
            <div class="col-md-6 text-start text-md-start mb-3 mb-md-0">
                &copy; <a href="#" style="color: white;">{{ $company->name ?? 'Perusahaan' }}</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-md-end" style="text-align: right; color: white;">
                <a href="kingtech.site">Develop By KTech</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer End -->
