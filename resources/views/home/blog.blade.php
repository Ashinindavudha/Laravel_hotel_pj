@extends('home.template')
@section('content')
<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('vendor/part/img/bg-img/banner.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

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
                            <a href="#" class="post-catagory">Event</a>
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

@endsection