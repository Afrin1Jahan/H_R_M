@extends('admin.master')
@section('content')
<!-- <h1>Employee</h1> -->



<!-- <h3>Data Table Employee</h3> -->
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Available Balance</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($balances as $key=> $balance)

    <tr>
      <th scope="row">{{$key+1, }}</th>

      <td>{{$balance->leaveType->Leavename}}</td>
      <td>{{$balance->balance}}</td>
    </tr>


    @endforeach

  </tbody>
</table>

@endsection