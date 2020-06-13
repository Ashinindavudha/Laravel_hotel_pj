@extends('home.template')
@section('content')
<!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('vendor/part/img/bg-img/banner3.jpeg')}});" data-img-url="img/bg-img/16.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">Hotel &amp; Resort</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Welcome To Hotel 42</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('vendor/part/img/bg-img/banner.jpg')}});" data-img-url="img/bg-img/17.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInUp" data-delay="200ms">Hotel &amp; Resort</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms">Welcome To Hotel 42</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('vendor/part/img/bg-img/banner5.jpg')}});" data-img-url="img/bg-img/18.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms">Hotel &amp; Resort</h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms">Welcome To Hotel 42</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <form action="#" method="post">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Check In</label>
                                <input type="date" class="form-control" name="checkin-date" id="txtdate">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkOut">Check Out</label>
                                <input type="date" class="form-control" name="checkout-date" id="txtdate1">
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="adults">Adult</label>
                                <select name="adults" class="form-control" id="adult">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-2 col-lg-1">
                                <label for="children">Children</label>
                                <select name="children" id="child" class="form-control">
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <a href="/roomlist" class="form-control btn roberto-btn w-100" value="click" onclick="Search();">Search</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
    </section>
    <!-- About Us Area End -->

<!-- Our Room Area Start -->
    <section class="roberto-rooms-area">
        <div class="rooms-slides owl-carousel">
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('vendor/part/img/bg-img/single.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Superior Single Room</h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms">40000 MMK<span>/ Day</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> Size</span> <span>: 30 ft</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max persion 1</span></li>
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>: Single King Beds</span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: Wifi, Television, Bathroom </span></li>
                    </ul>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('vendor/part/img/bg-img/double.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Double King Room</h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms">60000 MMK <span>/ Day</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> Size</span> <span>: 40 ft</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max persion 2</span></li>
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>: Twin King Beds</span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: Wifi, Television, Bathroom , Mini Bar</span></li>
                    </ul>
                </div>
            </div>
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('vendor/part/img/bg-img/family.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Family Room</h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms">80000 MMK <span>/ Day</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> Size</span> <span>: 50 ft</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max persion 4</span></li>
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>: King Beds</span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: Wifi, Television, Bathroom ,Mini Bar , Extra Bed ,Swimming Pool</span></li>
                    </ul>
                </div>
            </div>
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('vendor/part/img/bg-img/platinum.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Platinum King Room</h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms">85000 MMK <span>/ Day</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> Size</span> <span>: 40 ft</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max persion 2</span></li>
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>: King Beds</span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: Wifi, Television, Bathroom ,Mini Bar ,Swimming Pool ,Kitchen</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Room Area End -->


<div class="bg-overlay" style=" background: url({{asset('vendor/part/img/bg-img/banner5.jpg')}})  fixed  ;width:auto; height:700px;margin-top: 50px;opacity: 0.8;
             filter: alpha(opacity=50);">
             
             <div class="container">
              <div class="row-justify-content-center">
                <div class="col-1g-12 col-md-12 col-sm-12 col-xs-12 centered">
                 <div class="section-title">
                  <h1 class="cl-white mb-40" style="text-align: center;padding-top: 60px;color: white;">Our Services</h1>
                </div> 
              </div>
              
            </div>
            <div class="row" style="padding-top: 50px;">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4px;">

                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-wifi"></i><br>Wifi Internet</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4px;">
                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-bus"></i><br> Travel Desk</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4px;">
                  <p style="text-align: center;color: white;font-size: 18px;"> <i class="fas fa-syringe"></i><br>Doctor on call</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4px;">
                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-coffee"></i><br> Coffee & Pastry Shop</p>
                </div>
              </div>

              
            </div>
            <div class="row" style="padding-top: 80px;">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4px;">
                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-utensils"></i><br> BBQ Restaurant</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4px;">
                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-bacon"></i> <br>Buffet Breakfast</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4;">
                  <p style="text-align: center;color:white;font-size: 18px;"> <i class="fas fa-glass-cheers"></i><br> Welcome Drinks</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4;">
                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-archive"></i><br> Safe Deposit Box</p>
                </div>
              </div>

              
            </div>
            <div class="row" style="padding-top: 80px;">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4;">
                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-plane-departure"></i><br> Airport Pickup</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3  ">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4;">
                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-dumbbell"></i><br> Fitness Center</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3  ">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4px;">

                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-spa"></i><br> SPA & Thai Massage</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <div class="single-service-block" style="border: 2px solid white;border-radius: 10px;height: 90px;padding-top: 4px;">
                  <p style="text-align: center;color: white;font-size: 18px;"><i class="fas fa-utensils"></i><br> Multi Cuisine Restaurant</p>
                </div>
              </div>

              
            </div>
            
          </div>

          
        </div>

<!-- Blog Area Start -->
    <section class="roberto-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Our Blog</h6>
                        <h2>Latest News &amp; Event</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Post Area -->
                @foreach ($posts as $post)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail"><img class="img-fluid rounded" src="{{asset($post->image)}}" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p href="#" class="post-date">Posted on {{$post->created_at->toFormattedDateString()}}</p>
                         @foreach($categories as $category)
                            <p class="post-catagory">{{$category->name}}</p>
                        @endforeach
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">{{$post->title}}</a>
                        <p>{!!$post->body!!}</p>
                        <a href="{{route('post.show',$post->id)}}" class="btn continue-btn">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

<script>
    $(document).ready(function () {
                      $("#txtdate").datepicker({
                          minDate: 0
                      });
                  });
    $(document).ready(function () {
                      $("#txtdate1").datepicker({
                          minDate: 0
                      });
                  });
    function Search() {
          var checkin = $('#txtdate').val();
          localStorage.setItem("checkindate", checkin);

          var checkout = $('#txtdate1').val();
          localStorage.setItem("checkoutdate", checkout);

          var adult = $('#adult').val();
          localStorage.setItem("adul", adult);

          var childl = $('#child').val();
          localStorage.setItem("child", childl);

          var diff_in_time = Date.parse(checkout) - Date.parse(checkin);
          var diff_in_days = diff_in_time/(1000*60*60*24);
          localStorage.setItem('different_days', diff_in_days);

          return false;
        }
</script>
@endsection