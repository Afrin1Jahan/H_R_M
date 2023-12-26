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
      
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($departments as $key=>$department)
  <tr>
  <th scope="row">{{$key+1}}</th>
      <!-- <th> {{$department ->id}}</th> -->
      <td>{{$department-> Name}}</td>
      <td>{{$department-> Description}}</td>
      <td>{{$department-> No}}</td>
      <td>{{$department-> Location}}</td>


  
      
      
    <td>
    <a class="btn btn-primary" href="{{route('department.view',$department->id)}}">View</a>
    <a class="btn btn-success" href="{{route('department.edit',$department->id)}}">Edit</a>
    <a class="btn btn-danger" href="{{route('department.delete',$department->id)}}">Delete</a> 
  
  </td>

</tr>


@endforeach

    
  
  </tbody>
</table> 
{{$departments->links()}}
<div class="text-center">
  <a href="{{route('department.form')}}" class="btn btn-warning">Add new department</button></a>
  <a href="{{route('department.report')}}" class="btn btn-success">Report</button></a>
</div>
@endsection