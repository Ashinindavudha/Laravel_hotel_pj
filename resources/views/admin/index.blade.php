 @extends('admin.template')
 @section('content')
 <style>
   .card-title,.card-text{
    color: #fff;
    text-align: center;
  }
  a {
    text-decoration: none !important;
  }
</style>
<div class="container-fluid">

 <div class="row mb-4 mt-3">
    <div class="col-md-4">
      <a href="/admin/reservations/confirmed">
        <div class="card bg-info">
          <div class="card-body">
            <h5 class="card-title" >Online Booking Success</h5>
            <h5 class="card-text">{{$success_reservations->count()}}</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="/admin/reservation">
        <div class="card bg-info">
          <div class="card-body">
            <h5 class="card-title">Offline Reservation</h5>
            <p class="card-text">{{$offline_reservations->count()}}</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4">
      <div class="card bg-success">
        <div class="card-body">
          <h5 class="card-title">Total Reservation</h5>
          <p class="card-text">{{$offline_reservations->count() + $success_reservations->count()}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-md-4">
      <a href="/admin/reservations/cancel">
        <div class="card bg-secondary">
          <div class="card-body">
            <h5 class="card-title">Online Booking Canceled</h5>
            <p class="card-text">{{$cancel_reservations->count()}}</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">

    </div>

    <div class="col-md-4">

    </div>
  </div>

  <hr class="border-2 mt-3 mb-3" >

  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
    <h1 class="h3 mb-0 text-gray-800">Floor Plan</h1>
  </div> 
  <!-- floor plan -->
  <div class="mb-5 mt-2">
    <div id="row">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Floor View</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Type View</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <!-- Table-->
          <table class="table table-responsive table-hover">
            <thead>
              <tr>
                <th scope="col" style="width:150px">Floor</th>
                <th scope="col">Room</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>First Floor</td>
              @foreach($first_floor_rooms as $first_room)
                
              
              @if($first_room->status == 0)

                <td>
                  <button type="button" class="btn btn-danger btn-sm">{{$first_room->room_number}}</button>
                </td>

              @else

                <td>
                  <button type="button" class="btn btn-success btn-sm">{{$first_room->room_number}}</button>
                </td>

              @endif

              
              @endforeach
              </tr>
              <tr>
                <td>Second Floor</td>
                @foreach($second_floor_rooms as $second_room)

                  @if($second_room->status == 0)

                    <td>
                      <button type="button" class="btn btn-danger btn-sm">{{$second_room->room_number}}</button>
                    </td>

                  @else

                    <td>
                      <button type="button" class="btn btn-success btn-sm">{{$second_room->room_number}}</button>
                    </td>

                  @endif
                @endforeach
              </tr>
              <tr>
                <td>Third Floor</td>
                @foreach($third_floor_rooms as $third_room)

                  @if($third_room->status == 0)

                    <td>
                      <button type="button" class="btn btn-danger btn-sm">{{$third_room->room_number}}</button>
                    </td>

                  @else

                    <td>
                      <button type="button" class="btn btn-success btn-sm">{{$third_room->room_number}}</button>
                    </td>

                  @endif
                @endforeach
              </tr>
          <!-- <tr>
            <td class="align-content-center font-weight-bold">First Floor</td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">101</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm"> 102</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm"> 103</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">104</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">105</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">106</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">107</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">108</button>
            </td> 
            <td>
              <button type="button" class="btn btn-primary btn-sm">109</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">110</button>
            </td>  
          </tr>
          <tr>
            <td class="align-content-center font-weight-bold">Second Floor</td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">201</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">202</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">203</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">204</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">205</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">206</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">207</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">208</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">209</button>
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">210</button>
            </td>
          </tr>
          <tr>
            <td class="align-content-center font-weight-bold">Third Floor</td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">301</button>
            </td> 
            <td>
              <button type="button" class="btn btn-primary btn-sm">302</button>
            </td> 
            <td>
              <button type="button" class="btn btn-primary btn-sm">303</button>
            </td> 
            <td>
              <button type="button" class="btn btn-primary btn-sm">304</button>
            </td> 
            <td>
              <button type="button" class="btn btn-primary btn-sm">305</button>
            </td> 
            <td>
              <button type="button" class="btn btn-primary btn-sm">306</button>
            </td> 
            <td>
              <button type="button" class="btn btn-primary btn-sm">307</button>
            </td> 
          </tr> -->
        </tbody>
      </table>

      <!--End Table-->
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <!-- Table-->
      <table class="table table-responsive">

        <tr>
          <th scope="col" style="width:150px">Room Type</th>
          <th scope="col">Room</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="align-content-center font-weight-bold">Single Room</td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 101</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 102</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 201</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 305</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 309</button>
          </td>

        </tr>
        <tr>
          <td class="align-content-center font-weight-bold">Delux Room</td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 107</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 108</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 109</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 203</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 205</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 304</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 308</button>
          </td>
        </tr>
        <tr>
          <td class="align-content-center font-weight-bold">Family Room</td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 105</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 106</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 110</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 202</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 204</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 206</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 210</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 301</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 303</button>
          </td>
        </tr>
        <tr>
          <td class="align-content-center font-weight-bold">Double Room</td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 103</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 104</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 207</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 208</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 209</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 302</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 306</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 308 </button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 309</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 307</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm"> 310</button>
          </td>
        </tr>
      </tbody>
    </table>

    <!--End Table-->
  </div>

</div>

</div>


</div>

@endsection