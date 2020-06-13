@extends('admin.template')
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col">
             <h1>Floor</h1>
         </div>
         <div class="col col-lg-2">
             <a class="btn btn-primary" href="{{route('floor.create')}}">
                 <i class="fas fa-plus"> Add Floor</i>
             </a>
         </div>
     </div>
 </div>
 <div class="container ">
       
     <div class="row text-center" >
         <div class="col-lg-12 ">             
             <form action="{{route('floor.store')}}" method="post">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Floor ID</th>
                            <th>Floor Name</th>
                            <th>Floor Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($floors as $key => $row)                    
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$row->floor_name }}</td>
                        <td>{{$row->floor_no}}</td>
                        <td> 
                
            <form  action="{{route('floor.destroy',$row->id)}}" method="post"class="d-inline-block" onsubmit="return confirm('Are you sure?')">               @csrf
                            @method('DELETE')
                            <a href="{{route('floor.edit',$row->id)}}" class="btn btn-warning ">Edit</a>
                <input type="submit" value="Delete" class="btn btn-danger" >
                          </form>
                          </td>                          
                    </tr>
                    @endforeach
                       
                    </tbody>
                     
                 </table>
             </form>
         </div>
     </div>
 </div>

 @endsection