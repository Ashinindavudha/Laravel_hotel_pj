 @extends('admin.template')
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col">
             <h1>Facility</h1>
         </div>
         <div class="col col-lg-2">
             <a class="btn btn-primary" href="{{route('facility.create')}}">
                 <i class="fas fa-plus"> Add Facility</i>
             </a>
         </div>
     </div>
 </div>
 <div class="container ">
       
     <div class="row text-center" >
         <div class="col-lg-12 ">             
             <form action="{{route('facility.store')}}" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Facility ID</th>
                            <th>Facility Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($facilities as $key => $row)
                        <tr>
                    
                        <td>{{$key+1}}</td>
                        <td>{{ $row->facility_name }}</td>                   
                        <td>
                            <form  method="post" action="{{route('facility.destroy',$row->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('facility.edit',$row->id)}}" class="btn btn-primary ">Edit</a>
                                <input type="submit" class="btn btn-outline-primary" value="DELETE">
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