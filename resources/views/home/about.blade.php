@extends('home.template')
@section('content')

<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('vendor/part/img/bg-img/banner.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>About Us</h6>
                        <h2>Welcome to <br>Hotel 42 Luxury</h2>
                        
                    </div>
                    <div class="about-us-content mb-100">
                        <p class="wow fadeInUp" data-wow-delay="300ms">A hotel or a guest-house is a large building with many rooms, where people can sleep when they travel and they are not at their own house. Hotel is to provide travelers with shelter, food, refreshment, and similar services and goods, offering on a commercial basis things that are customarily furnished within households but unavailable to people on a journey away from home.Inn is sometimes used to mean a smaller hotel. Some for luxury.There are many types of hotel.Such as for families,business, and vacation and beach resort etc.Typically, the basic hotel services include reception guests, room service, food service, including restaurats in the hotel, and security.In some, there is along with bar or restaurant or something like that.For customers there is a very fun to be chill.</p>
                        
                        <img src="img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="{{asset('vendor/part/img/bg-img/13.jpg')}}" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="{{asset('vendor/part/img/bg-img/14.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="{{asset('vendor/part/img/bg-img/15.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection