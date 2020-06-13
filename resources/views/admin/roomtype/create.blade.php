@extends('admin.template')
@section('content')

<div class="container">
  <h2>Create RoomType</h2>
  <hr class="border-bottom-1">

<form class="form-group" method="post" action="{{route('roomtype.store')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Room Name</label>
        <input class="form-control" type="text" name="room_name" placeholder="Room Name">
    </div>
        
        <div class="mt-3 mb-3">
            <label>Description</label>
            <input class="form-control" type="text" name="description">
        <div class="row">
            <div class="col-lg-6">
                <label>Price</label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="col-lg-6">
                <label>Total Room</label>
                <input type="number" name="total_room" class="form-control">
            </div>
        </div>
        <div class="mt-3">
            <div class="form-group ">
                <label for="">Facility Name<i color="red">*</i></label>
                    <br>                  
                       @foreach($facilities as $row)
                      <input type="checkbox" name="facility_name[]" value=" {{$row->facility_name}}">{{$row->facility_name}}<br> 
                        @endforeach                    
                 

     
                </div> 
        </div>
        <div class="mt-3 form-group">
            <label>Room Images</label>
            <input class="form-control-file" type="file" name="image">
            </div>

        
   
    <hr class="border-bottom-1">
    <button type="submit" value="save" class="btn btn-primary"><i class="far fa-save"></i>&nbsp;&nbsp;Save</button>
</form>
</div>


 @endsection