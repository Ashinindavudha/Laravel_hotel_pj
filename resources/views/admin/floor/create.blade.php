@extends('admin.template')
@section('content')
<div class="container">
     <div class="row">
         <div class="col">
             <h1>Create Floor</h1>
         </div>
         <div class="col col-lg-2">
             <a class="btn btn-primary" href="{{route('floor.index')}}">
                 <i class="fas fa-list-ul"> Floor List</i>
             </a>
         </div>
     </div>
 </div>
<div class="container ">
    <div class="row">
        <div class="col-md-12 ">           
            
            <form action="{{route('floor.store')}}" method="post" >
                <!-- token -->
                @csrf
                <div class="form-group ">
                    <label for="">Floor Name<i color="red">*</i></label>       
                    <input id="name" type="text" class="form-control @error('floor_name') is-invalid @enderror" name="floor_name" required autocomplete="title" autofocus>

                                @error('floor_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                    
               
                </div>
                <div class="form-group ">
                    <label for="">Floor Number<i color="red">*</i></label>                  
                    <input id="no" type="text" class="form-control @error('floor_no') is-invalid @enderror" name="floor_no" required autocomplete="title" autofocus>
                                @error('floor_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>                
                <div class="form-group">
                    <input type="submit" value="Save" class="form-control btn btn-primary " name="save" >
                </div>
            </form>    
        </div>
    </div>    
</div>
@endsection