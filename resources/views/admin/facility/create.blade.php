@extends('admin.template')
@section('content')
<div class="container">
     <div class="row">
         <div class="col">
             <h1>Create Facilities</h1>
         </div>
         <div class="col col-lg-2">
             <a class="btn btn-primary" href="{{route('facility.index')}}">
                 <i class="fas fa-list-ul"> Facilities List</i>
             </a>
         </div>
     </div>
 </div>
<div class="container ">
    <div class="row">
        <div class="col-md-12 ">           
            
            <form action="{{route('facility.store')}}" method="post" >
                <!-- token -->
                @csrf
                <div class="form-group ">
                    <label for="">Facility Name<i color="red">*</i></label>   
                    <input id="name" type="text" class="form-control @error('facility_name') is-invalid @enderror" name="facility_name" value="{{ old('facility_name') }}" required autocomplete="title" autofocus>

                                @error('facility_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror        
               
                </div>
                               
                <div class="form-group">
                    <input type="submit" value="Save" class="form-control btn btn-primary " >
                </div>
            </form>    
        </div>
    </div>    
</div>
@endsection