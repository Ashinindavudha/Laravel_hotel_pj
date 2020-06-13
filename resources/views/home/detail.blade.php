@extends('home.template')
@section('content')

<div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">

        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <hr>

        <!-- Date/Time -->
        <p class="d-inline-block" >Posted on {{$post->created_at->toDayDateTimeString()}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{asset($post->image)}}" alt="">

        <hr>

        <!-- Post Content -->
        {!! $post->body !!}

        <hr>

      </div>

    </div>
    <!-- /.row -->

  </div>

@endsection