@extends('admin.template')
@section('content')
<!--Nav Bar-->
<div class="container">
    <div class="row">
        <div class="col">
          <h2>Edit Guest</h2>
        </div>
        
        <div class="col col-lg-2">
            <a href="{{route('guest.index')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Guest List</a>
        </div>
      
    </div>
</div>
<!--Create Guest Information-->
<div class="container">
    <form method="post" action="{{ route('guest.update',$guests->id)}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-row">
        <div class="form-group col-lg-12">
          <label for="">Name</label>
          <input type="text" class="form-control @error('name')is-invalid @enderror" name="guest_name" value="{{ $guests->guest_name }}">

          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
        </div>
     </div>

      <div class="form-row">
        <div class="form-group col-lg-12">
          <label for="">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $guests->email }}">
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
        </div>
      </div>

    

      <div class="form-row">
        <div class="form-group col-lg-12">
          <label for="">Phone Number</label>
          <input type="number" class="form-control @error('phoneno') is-invalid @enderror" name="phone_no" value="{{ $guests->phone_no }}">
          @error('phoneno')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
        </div>
        </div>
      <div class="form-row">
        <div class="form-group col-lg-12">
            <label>Image:</label>
            <input type="file" name="image" class="form-control-file"><br>
            <img src="{{asset($guests->image)}}" class="img-fluid w-25">
            <input type="hidden" name="oldimg" value="{{$guests->image}}">
        </div>
      </div>
      <button class="btn btn-primary form-control" type="submit" name="save">Update</button>
    </form>
 </div>



@endsection