@extends('home.template')
@section('content')
<div class="bg-overlay" style=" background: url({{asset('vendor/part/img/bg-img/banner5.jpg')}})  fixed  ;width:auto; height:100vh;opacity: 0.8;
             filter: alpha(opacity=50);">

    <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h1 class="text-light">Order Complete!</h1>
                                    <h2 class="text-light mb-4">Please wait for Confirmation.</h2>
                                    <a href="/" class="btn roberto-btn" >Back Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
</div>

@endsection