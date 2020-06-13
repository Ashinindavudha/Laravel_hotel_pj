@extends('admin.template')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Form</h2>            
            <form method="post" action="{{ route('facility.update',$facility->id)}}" enctype="multipart/form-data">
                <!-- token -->
                @csrf
                @method('PUT')
               
                <div class="form-group ">
                    <label for="">Facility Name:</label>
                    <input type="text" name="facility_name" class="form-control" value="{{$facility->facility_name}}">
                </div>               
                
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary ">
                </div>
            </form>           
    
        </div>
    </div>
    
</div>
@endsection