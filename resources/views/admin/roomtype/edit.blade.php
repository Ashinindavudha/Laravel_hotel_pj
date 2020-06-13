@extends('admin.template')
@section('content')

<div class="container">
  <h2>Edit RoomType</h2>
  <hr class="border-bottom-1">

<form class="form-group" method="post" action="{{route('roomtype.update',$roomtypes->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label>Room Name</label>
        <input class="form-control" type="text" name="room_name" value="{{$roomtypes->room_name}}" placeholder="Room Name">
    </div>

        <div class="mt-3 mb-3">
            <label>Description</label>
            <input class="form-control" type="text" name="description" value="{{$roomtypes->description}}">
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label>Price</label>
                <input type="number" name="price" value="{{$roomtypes->price}}" class="form-control">
            </div>
            <div class="col-lg-6">
                <label>Total Room</label>
                <input type="number" name="total_room" value="{{$roomtypes->total_room}}" class="form-control">
            </div>
        </div>
    
        <div class="form-group">
            <label>Image:</label><br>
            <input class="form-control-file" type="file" name="image" value="{{$roomtypes->image}}" >
        </div>
   
    <hr class="border-bottom-1">
    <button type="submit" value="Save" class="btn btn-primary"><i class="far fa-save"></i>&nbsp;&nbsp;Save</button>
</form>
</div>

 @endsection