 @extends('admin.template')
 @section('content')
 <div class="container-fluid">

  <!-- Content Row -->
  <div class="row">
    <h2>Confirmed Reservations</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Guest</th>
          <th>Checkin</th>
          <th>Checkout</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($confirmations as $key=> $confirmation)

        <tr>
          <td>{{$key+1}}</td>
          <td>{{$confirmation->name}}</td>
          <td>{{ $confirmation->check_in}}</td>
          <td>{{ $confirmation->check_out}}</td>
          <td>{{ $confirmation->price}}</td>
          <td>
            <button class="btn btn-sm btn-success detail" data-toggle="modal" data-name="{{$confirmation->name}}" data-email="{{$confirmation->email}}" data-phone="{{$confirmation->phone}}" data-nrc="{{$confirmation->nrc}}" data-check_in="{{$confirmation->check_in
                  }}" data-check_out="{{$confirmation->check_out}}" data-price="{{$confirmation->price}}">View</button>

            <div class="modal fade" id="mymodal">
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
                              <td scope="col">Price:</td>
                              <td class="price"></td>
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

  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->

  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Content Column -->
  </div>

</div>

@endsection

 @section('script')
 <script>
  $(document).ready(function(){
    $(".detail").click(function(){
      var name=$(this).data("name");
      var nrc=$(this).data("nrc");
      var email=$(this).data("email");
      var phone=$(this).data("phone");
      var check_in=$(this).data("check_in");
      var check_out=$(this).data("check_out");
      var price=$(this).data("price");

      $(".name").text(name);
      $(".nrc").attr("src",nrc);
      $(".email").text(email);
      $(".phone").text(phone);
      $(".in").text(check_in);
      $(".out").text(check_out);
      $(".price").text(price);

      
      $("#mymodal").modal('show');

    })
  })
</script>
 @endsection