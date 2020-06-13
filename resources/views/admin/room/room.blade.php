@extends('admin.template')
@section('content')
<div class="container">
  <h2 class="d-inline-block">Create Room</h2>
<a class="btn btn-primary float-right" href="{{route('room.create')}}"><i class="fas fa-plus"></i> &nbsp;&nbsp;Create Room</a>
<hr class="border-bottom-1">
</div>

<div class="container mt-3">
<div class="mb-2">
   
</div>

<table class="table">
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">No.</th>
      <th scope="col">Room No.</th>
      <th scope="col">Room Name</th>
      <th scope="col">Floor No.</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
@foreach ($rooms as $key => $room)

  <tbody>
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$room->room_number}}</td>
      <td>{{$room->roomtype->room_name}}</td>
      <td>{{$room->floor->floor_no}}</td>
      <td>{{$room->roomtype->price}}</td>
      <td>{{$room->status}}</td>
      <td><a href="{{route('room.edit',$room->id)}}" class="btn btn-primary">Edit</a>
        <form class="d-inline-block" method="post" action="{{route('room.destroy',$room->id)}}" onsubmit="return confirm('Are You Sure!')">
          @csrf
         @method('DELETE')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </td>
    </tr>
  </tbody>
@endforeach
</table>
</div>
@endsection