@extends('admin.template')
@section('content')

<!--Nav Bar-->
<div class="container">

          <h2 class="d-inline-block">Create New Reservation</h2>

            <a href="{{route('reservation.index')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Reservation List</a>

</div>

<div class="container mt-3">
    <form method="post" action="{{ route('reservation.store') }}" enctype="multipart/form-data">
      @csrf

      <div class="container">
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
          <div class="float-right">
            <a href="{{route('guest.create')}}"> <i class="fas fa-plus">
            </i>add new</a>
          </div>
            <select class="form-control" name="guest_name">
              <option value="" disabled="disabled">Name</option>
              @foreach($guests as $row)
              <option value="{{$row->id}}">{{$row->guest_name}}</option>
              @endforeach
            </select>

      </div>


      <div class="form-group">

          <label for="">Check In</label>
             <input id="txtdate" type="text" class="form-control" name="check_in" placeholder="">
             

        </div>

        <div class="form-group">
          <label for="">Check Out</label>
          <input type="text" name="check_out" class="form-control" id="txtdate1">
        </div>
      <input class="btn btn-primary" type="submit" name="save" value="Save">
    </form>
 </div>

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
