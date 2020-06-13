@extends('admin.template')
@section('content')
<!--Nav Bar-->
<div class="container mb-3">
    <div class="row">
        <div class="col">
          <h1>Create New Guest</h1>
        </div>
        
        <div class="col col-lg-2">
            <a href="{{route('guest.index')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Guest List</a>
        </div>
      
    </div>
</div>
<!--Create Guest Information-->
<div class="container">
    <form method="post" action="{{ route('guest.store') }}" enctype="multipart/form-data">
      @csrf
     
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control @error('name')is-invalid @enderror" name="guest_name" placeholder="">

          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
        </div>
   

      
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="">
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
        </div>
    

      
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="number" class="form-control @error('phoneno') is-invalid @enderror" name="phone_no">
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
        </div>
     

       
        <div class="form-group">
          <label for="">Image</label>
          <input type="file" class="form-control-file" name="image">
          <span style="color:red;">{!! $errors->first('image')!!}</span>
        </div>
     

      <button class="btn btn-primary" type="submit" name="save" value="save">Save</button>
    </form>
 </div>

@endsection