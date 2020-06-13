@extends('home.template')
@section('content')

<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('vendor/part/img/bg-img/banner.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Our Room</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
<!-- Rooms Area Start -->
<div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Area -->
                     @foreach($rooms as $room)
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms"> 
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="{{$room->roomtype->image}}" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>{{$room->roomtype->room_name}}</h2>
                            <h4 class="price">{{$room->roomtype->price}}$ <span>/ Day</span></h4>
                            <div class="room-feature">
                                <h6>Rooms: <span>
                                    @foreach($roomCounts as $roomCount)
                                        @if($room->roomtype_id == $roomCount['id'])
                                            {{$roomCount['count']}}
                                        @endif
                                    @endforeach
                                </span></h6>
                                <h6>Facilities: <span>{{$room->roomtype->facility_name}}</span></h6>
                            </div>
                            <a href="/order" data-price="{{$room->roomtype->price}}" class="book btn view-detail-btn">Book Now<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                                <label for="checkInDate">Date</label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" id="in" name="checkInDate" placeholder="Check In">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" id="out" name="checkOutDate" placeholder="Check Out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests">Guests</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="input-small form-control" id="man">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="input-small form-control" id="chil">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="/roomlist" class="btn roberto-btn w-100">Check Available</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Rooms Area End -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    document.getElementById("in").setAttribute('value',localStorage.getItem('checkindate'));

    document.getElementById("out").setAttribute('value',localStorage.getItem('checkoutdate'));

    document.getElementById("man").setAttribute('value',localStorage.getItem('adul'));

    document.getElementById("chil").setAttribute('value',localStorage.getItem('child'));

    $(document).ready(function(){
 
        $('.book').click(function(){
            var price = $(this).data('price');
            var day_difference = localStorage.getItem('different_days');
            var total_price = price * day_difference;
            localStorage.setItem('total_price', total_price);
        });
    });

</script>


@endsection