@extends('admin.template')
@section('content')
<!--Nav Bar-->
<div class="container">
    <div class="row">
        <div class="col">
          <h1>Edit Category Name</h1>
        </div>
        
        <div class="col col-lg-2">
            <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Category List</a>
        </div>
      
    </div>
</div>

<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6 offset-2">
      <form method="post" action="{{ route('category.update', $categories->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <input type="text" name="name" value="{{ $categories->name }}" class="form-control">

          
        </div>
        <input type="submit" name="" value="Update" class="btn btn-primary">
        
      </form>
      
    </div>
    
  </div>
  
</div>


@endsection