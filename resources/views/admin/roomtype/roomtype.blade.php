@extends('admin.template')
@section('content')

<div class="container">
  <h2 class="d-inline-block">Create Room Type</h2>
<a class="btn btn-primary float-right" href="{{route('roomtype.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Create Room</a> 
<hr class="border-bottom-1">
</div>

<div class="container mt-3">
<div class="mb-2">
   
</div>

<table class="table">
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">No.</th>
      <th scope="col">Room Name</th>
      <th scope="col">Total Room</th>
      <th scope="col">Price</th>
      <th scope="col">Facility Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
@foreach ($roomtypes as $key => $roomtypes)
  <tbody>
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$roomtypes->room_name}}</td>
      <td>{{$roomtypes->total_room}}</td>
      <td>{{$roomtypes->price}}</td>
      <td>{{$roomtypes->facility_name}}</td>
      <td><a href="{{route('roomtype.edit',$roomtypes->id)}}" class="btn btn-primary">Edit</a>
      </td>
      <td>
        <form class="d-inline-block" method="post" action="{{route('roomtype.destroy',$roomtypes->id)}}" onsubmit="return confirm('Are You Sure!')">
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