 @extends('admin.template')
 @section('content')
 <div class="container mb-3">

          <h2 class="d-inline-block">Reservation</h2>

        <a href="{{route('reservation.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add Reservation</a>


</div>

<div class="container">
    <div class="row">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Room Number</th>
              <th scope="col">Guest Name</th>
              <th scope="col">Check In</th>
              <th scope="col">Check Out</th>
              <th scope="col">Total</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($reservations as $reservation)
              <tr>
                <td>1</td>
                <td>{{ $reservation->room->room_number }}</td>
                <td>{{ $reservation->guest->guest_name}}</td>
                <td>{{ $reservation->check_in}}</td>
                <td>{{ $reservation->check_out}}</td>
                <td>{{$reservation->total}}</td>
                <td>
                        <form method="post" action="{{ route('guest.destroy', $reservation->id)}}"  onsubmit="return confirm('Are you sure')">
                          @csrf
                        </form>
                        <button class="btn btn-sm btn-success detail" data-toggle="modal" data-room_number="{{$reservation->room->room_number}}" data-guest_name="{{ $reservation->guest->guest_name}}" data-email="{{ $reservation->guest->email}}"data-phone_no="{{ $reservation->guest->phone_no}}" data-image="{{$reservation->guest->image}}" data-check_in="{{ $reservation->check_in}}" data-check_out="{{ $reservation->check_out}}" data-total="{{$reservation->total}}">View</button>
                        <div class="modal fade" id="mymodal">
                    @csrf
                    <div class="modal-dialog modal-lg " >                    
                      <div class="modal-content">
                        <div class="modal-header my-2">
                          <h3>Reservation Detail</h3>
                          <button class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span> 
                          </button>
                        </div>
                        <div class="modal-body ">
                              <table class="table text-left " border="0" >
                            <tr>
                              <td scope="col" >Guest Name:</td>
                              <td class="name"></td>
                            </tr>
                            <tr>
                              <td scope="col">Email:</td>
                              <td class="email"></td>
                            </tr>
                            <tr>
                              <td scope="col">Phone No:</td>
                              <td class="phone"></td>
                            </tr>
                            <tr>
                              <td scope="col">Check_In Date:</td>
                              <td class="in"></td>            
                            </tr>
                            <tr>
                              <td scope="col">Check_Out Date:</td>
                              <td class="out"></td>
                            </tr>
                            <tr>
                              <td scope="col">Room Number</td>
                              <td class="roomno"></td>
                            </tr>
                            <tr> 
                              <td scope="col">Total:</td>
                              <td class="total"></td>
                            </tr>
                            <tr>
                              <td scope="col">NRC Front:</td>
                              <td><img class="nrc w-50"></td>            
                            </tr>
                          </table>            
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                    </td>
                </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>


 @endsection
 @section('script')
 <script>
  $(document).ready(function(){
    $(".detail").click(function(){
      var name=$(this).data("guest_name");
      var nrc=$(this).data("image");
      var email=$(this).data("email");
      var phone=$(this).data("phone_no");
      var check_in=$(this).data("check_in");
      var check_out=$(this).data("check_out");
      var room_number=$(this).data("room_number");
      var total=$(this).data("total");

      $(".name").text(name);
      $(".nrc").attr("src",nrc);
      $(".email").text(email);
      $(".phone").text(phone);
      $(".in").text(check_in);
      $(".out").text(check_out);
      $(".total").text(total);
      $(".roomno").text(room_number);

      
      $("#mymodal").modal('show');

    })
  })
</script>
 @endsection