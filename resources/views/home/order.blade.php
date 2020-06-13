@extends('home.template')
@section('content')

<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('vendor/part/img/bg-img/banner.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Booking</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 roberto-contact-form">
        <form action="{{route('onlinebooking.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Guest Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone No:</label>
                    <input type="number" name="phone" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label>NRC Image</label>
                    <input type="file" name="nrc" class="form-control-file">
                </div>
                <div class="form-group mt-2">
                    
                    <input type="submit" name="" class="btn roberto-btn" value="Booking Now">
                </div>

                <div class="form-group">
                    <label class="arr"></label>
                    <input type="hidden" id="in" name="check_in" class="form-control">
                </div>

                <div class="form-group">
                    <label class="cod"></label>
                    <input type="hidden" id="out" name="check_out" class="form-control">
                </div>
                <div class="form-group">
                    
                    <input type="hidden" id="pay" name="price" class="form-control">
                </div>
                  
                
        
            </form>

        </div>
        <div class="col-lg-4">
            <form>
            <div class="card" style="width: 18rem;">
  <div class="card-body">
   Arrival Date: <h5 class="card-title" id="indate"></h5>
   <hr class="border-1">
    Check Out Date:<h5 class="card-title" id="outdate"></h5>
    <hr class="border-1">
    Total Adult:<h5 class="card-title" id="man"></h5>
    <hr class="border-1">
    Total Child:<h5 class="card-title" id="chil"></h5>
    <hr class="border-1">
    Payment Amount:<h5 class="card-title" id="amount"></h5>

   
  </div>
</div>
</form>
        </div>
     
    </div>
</div>
<script>
    document.getElementById('in').setAttribute('value', localStorage.getItem('checkindate'));
document.getElementById('out').setAttribute('value', localStorage.getItem('checkoutdate'));
document.getElementById('pay').setAttribute('value', localStorage.getItem('total_price'));

   var arrival = localStorage.getItem("checkindate");
   var arr = JSON.stringify(arrival);
   document.getElementById("indate").innerHTML = arr;

    var departure = document.getElementById("outdate").innerHTML=localStorage.getItem("checkoutdate");

    document.getElementById("man").innerHTML=localStorage.getItem("adul");
    document.getElementById("chil").innerHTML=localStorage.getItem("child");
    document.getElementById('amount').innerHTML = localStorage.getItem('total_price');
</script>

@endsection