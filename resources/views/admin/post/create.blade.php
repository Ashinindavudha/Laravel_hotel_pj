@extends('admin.template')
@section('content')
<!--Nav Bar-->
<div class="container">
    <div class="row">
        <div class="col">
          <h1>Create New Post</h1>
        </div>
        
        <div class="col col-lg-2">
            <a href="{{route('post.index')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Post List</a>
        </div>
      
    </div>
</div>

<!-- Blog Post Create -->
<div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mb-3 mt-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Body:</label>
                        <textarea name="body" class="form-control" id="summernote"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label>Category:</label>
                        <select name="category" class="form-control">
                            <option value="" disabled="disabled">Choose Category</option>
                            @foreach($categories as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="save" class="btn btn-primary" value="Save">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection