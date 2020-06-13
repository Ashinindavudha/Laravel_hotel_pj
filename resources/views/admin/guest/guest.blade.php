@extends('admin.template')
@section('content')
<div class="container mb-3">

          <h2 class="d-inline-block">Guest</h2>

            <a  class="btn btn-primary float-right" href="{{route('guest.create')}}"><i class="fas fa-plus"></i> Create Guest</a>

</div>

<div class="container">
    <div class="row">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Guest ID</th>
              <th scope="col">Guest Name</th>
              <!-- <th scope="col">NRC</th> -->
              <th scope="col">Email</th>
              <th scope="col">Phone No.</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($guests as $key => $row)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $row->guest_name }}</td>
                <td>{{ $row->email}}</td>
                <td>{{ $row->phone_no}}</td>
                <td>
                        <form method="post" action="{{ route('guest.destroy', $row->id)}}"  onsubmit="return confirm('Are you sure')">
                          @csrf
                          @method('DELETE')
                          <a href="{{route('guest.edit',$row->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                          <input type="submit" class="btn btn-outline-primary" value="Delete">
                        </form>
                    </td>
                </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>


 @endsection