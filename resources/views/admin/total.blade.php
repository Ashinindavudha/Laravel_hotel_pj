 @extends('admin.template')
 @section('content')
 <div class="container-fluid">

  <!-- Content Row -->
  <div class="row">
    <h2>Total Reservations</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Guest</th>
          <th>Checkin</th>
          <th>Checkout</th>
        </tr>
      </thead>
      <tbody>
        @foreach($confirmations as $key=> $confirmation)

        <tr>
          <td>{{$key+1}}</td>
          <td>{{$confirmation->name}}</td>
          <td>{{ $confirmation->check_in}}</td>
          <td>{{ $confirmation->check_out}}</td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->

  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Content Column -->
  </div>

</div>

@endsection