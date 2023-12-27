@extends('admin.master')
@section('content')

<div class="text-center fw-bold">
<h1>Department List</h1>
</div>



<table class="table table-hover">
  <thead>
  <tr>
      <th scope="col">id</th>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">No</th>
      <th scope="col">Location</th>
      
    </tr>
  </thead>

  <tbody>
  
  <tr>
      <td>{{$departments-> Name}}</td>
      <td>{{$departments-> Description}}</td>
      <td>{{$departments-> No}}</td>
      <td>{{$departments->Location}}</td>
    <td>
</tr>

</tbody>
</table> 

@endsection