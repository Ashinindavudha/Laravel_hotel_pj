@extends('admin.template')
@section('content')

<div class="container">
  <h2>Edit Room</h2>
  <hr class="border-bottom-1">

<form class="form-group" method="post" action="{{route('room.update',$rooms->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label>Room Number</label>
        <input class="form-control" type="number" name="room_number" placeholder="Room Number" value="{{$rooms->room_number}}">
    </div>
    <div class="row mt-3">
        <div class="col-lg-6">
            <label>Floor</label>
    <select name="floor_id" class="form-control" value="{{$rooms->floor_id}}" >
                <option>100</option>
                <option>100</option>
                <option>100</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label>Room Type</label>
            <select name="roomtype_id" class="form-control" value="{{$rooms->roomtype_id}}">
                <option>100</option>
                <option>100</option>
                <option>100</option>
            </select>
        </div>
    </div>
    <!--<div class="custom-control custom-switch mt-4 mb-3">
        <input name="status" type="checkbox" class="custom-control-input" id="customSwitch1">
        <label class="custom-control-label" for="customSwitch1">Status</label>
    </div>-->
    <div>
        <input type="text" name="status" value="{{$rooms->status}}" class="form-control mt-3" placeholder="status">
    </div>
    <hr class="border-bottom-1">
    <button type="submit" value="Save" class="btn btn-primary"><i class="far fa-save"></i>&nbsp;Save</button>
</form>
</div>

 @endsection