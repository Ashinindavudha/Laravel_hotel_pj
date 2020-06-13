@extends('admin.template')
@section('content')
<!--Nav Bar-->
<div class="container">
    <div class="row">
        <div class="col">
          <h1>Post</h1>
        </div>
        
        <div class="col col-lg-3">
            <a href="{{route('post.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Create Post </a>
        </div>
      
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table">
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        
        <thead class="thead-light">
          <tr>
              <th scope="col">No.</th>
              <th scope="col">Title</th>
              <th scope="col">Body</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($posts as $key => $post)
          <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>{{ $post->category->name}}</td>
            <td>
                
                    <form method="post" action="{{ route('post.destroy', $post->id)}}"  onsubmit="return confirm('Are you sure')">
                      <a href="{{ route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                      @csrf
                      @method('DELETE')
                      <input type="submit"class="btn btn-outline-primary" value="Delete">
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>  
  </div>  
@endsection