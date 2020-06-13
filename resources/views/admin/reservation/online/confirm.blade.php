@extends('admin.template')
@section('content')

<!--Nav Bar-->

<div class="container">
    <form method="post" action="{{route('onlinereservation.confirm')}}">
      @csrf
      <input type="hidden" name="id" value="{{$reservation->id}}">
      
        <div class="form-group">
          <label for="">Room Number</label>
          <select class="form-control" name="room_id">
            <option selected disabled>Select Room</option>
              @foreach($rooms as $room)
              <option value="{{$room->id}}">{{$room->room_number}}</option>
              @endforeach
            </select>

      
     </div>

      
        <div class="form-group">
          <label for="">Guest Name</label>
            <input type="text" name="guest" class="form-control" value="{{$reservation->name}}" disabled>
        </div>
     


      
        <div class="form-group">
          <label for="">Check In</label>
             <input id="txtdate" type="text" class="form-control" name="check_in" value="{{$reservation->check_in}}" disabled>
             
        
        </div>

        
        <div class="form-group">
          <label for="">Check Out</label>
          <input type="text" name="check_out" class="form-control" id="txtdate1" value="{{$reservation->check_out}}" disabled>
        
        </div>
      <input class="btn btn-primary" type="submit" name="save" value="Save">
      <a href="{{route('onlinereservation.index')}}" class="btn btn-warning">Go Back</a>
    </form>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
    $(document).ready(function () {
        $("#txtdate").datepicker({
            minDate: 0
        });
    });

    $(document).ready(function () {
        $("#txtdate1").datepicker({
            minDate: 0
        });
    });
</script>

@endsection
