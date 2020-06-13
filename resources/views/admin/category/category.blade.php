@extends('admin.template')
@section('content')
<!--Nav Bar-->
<div class="container">
    <div class="row">
        <div class="col">
          <h1>Category</h1>
        </div>
        
        <div class="col col-lg-3">
            <a href="{{route('category.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Create category List</a>
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
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($categories as $key => $row)
          <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $row->name }}</td>
            <td>
                
                    <form method="post" action="{{ route('category.destroy', $row->id)}}"  onsubmit="return confirm('Are you sure')">
                      <a href="{{ route('category.edit',$row->id)}}" class="btn btn-primary">Edit</a>
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-outline-primary" value="Delete">
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>  
  </div>  


@endsection