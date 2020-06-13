@extends('admin.template')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Form</h2>
            
            <form method="post" action="{{ route('floor.update',$floor->id)}}" enctype="multipart/form-data">
                <!-- token -->
                @csrf
                @method('PUT')
               
                <div class="form-group ">
                    <label for="">Floor Name:</label>
                    <input type="text" name="floor_name" class="form-control" value="{{$floor->floor_name}}">
                </div>
                <div class="form-group ">
                    <label for="">Floor No:</label>
                    <input type="text" name="floor_no" class="form-control" value="{{$floor->floor_no}}">
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary " name="save">
                </div>
            </form>
           
    
        </div>
    </div>
    
</div>
@endsection