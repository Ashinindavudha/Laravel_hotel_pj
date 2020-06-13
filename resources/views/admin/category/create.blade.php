@extends('admin.template')
@section('content')
<!--Nav Bar-->
<div class="container">
    <div class="row">
        <div class="col">
          <h1>Create New Category</h1>
        </div>
        
        <div class="col col-lg-2">
            <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Category List</a>
        </div>
      
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-2">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label> Category Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>
        </div>
        
    </div>
    
</div>

@endsection