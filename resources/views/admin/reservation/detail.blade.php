@extends('admin.template')
 @section('content')
 <div class="container">
    <div class="row">
        <div class="col">
          <h1>Online Reservation</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Guest Name</th>
              <th scope="col">Check_In Date</th>
              <th scope="col">Check Out Date</th>
              <th scope="col">Price</th>
              <th>Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
           @foreach($booking as $book)
              <tr>
                <td>{{$book->name}}</td>
                <td>{{$book->check_in}}</td>
                <td>{{$book->check_out}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->status}}</td>
                <td>
                  <form action="{{route('onlinereservation.confirm')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <input type="submit" name="confirm" value="Confirm" class="btn btn-sm btn-success">
                  </form>

                  <form action="{{route('onlinereservation.cancel')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <input type="submit" name="cancel" value="Cancel" class="btn btn-sm btn-danger">
                  </form>
                  <button class="btn btn-sm btn-success detail" data-toggle="modal" data-name="{{$book->name}}" data-email="{{$book->email}}" data-phone="{{$book->phone}}" data-nrc="{{$book->nrc}}" data-check_in="{{$book->check
                  }}" data-check_out="{{$book->check_out}}" data-price="{{$book->price}}">View</button>


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
                              <td class="check_in"></td>            
                            </tr>
                            <tr>
                              <td scope="col">Check_Out Date:</td>
                              <td class="check_out"></td>
                            </tr>
                            <tr> 
                              <td scope="col">Price:</td>
                              <td class="price"></td>
                            </tr>
                            <tr>
                              <td scope="col">NRC Front:</td>
                              <td class="nrc"></td>            
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
      $(".check_in").text(in);
      $(".check_out").text(out);
      $(".price").text(price);

      
      $("#mymodal").modal('show');

    })
  })
</script>
 @endsection