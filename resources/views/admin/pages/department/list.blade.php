@extends('admin.master')
@section('content')
<h1>Department</h1>

<a href="{{route('department.form')}}" class="btn btn-warning">Add new department</button></a>


<table class="table table-hover">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">no</th>
      <th scope="col">location</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($departments as $department)
  <tr>
      <th scope="row">#</th>
      <th> {{$department ->id}}</th>
      <td>{{$department-> name}}</td>
      <td>{{$department-> description}}</td>
      <td>{{$department-> no}}</td>
      <td>{{$department-> location}}</td>
      
      
    <td>
      
    <a class="btn btn-success" href="">Edit</a>
    <a class="btn btn-danger" href="">Delete</a> 
  
  </td>

</tr>


@endforeach

    
  
  </tbody>
</table> 


@endsection