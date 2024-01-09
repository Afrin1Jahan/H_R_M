@extends('admin.master')
@section('content')
<div class="text-center fw-bold">
<H5>Designation  List</H5>
</div>

<table class="table table-hover">
  <thead>
  <tr>
      
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Department</th>
      <!-- <th scope="col">Date</th> -->
      <th scope="col">Action</th>
      <!-- <th scope="col">Status</th> -->
    
    </tr>
  </thead>
  <tbody>


  @foreach($designations as $key=>$designation)



  <tr>
  <th scope="row">{{$key+1}}</th>
  <td>{{$designation->title}}</td> 
  <td>{{$designation->description}}</td> 
  <td>{{optional($designation->departmentRel)->Name}}</td> 
  <!-- <td>{{$designation->date}}</td>  -->
  
  <td>
      
  <a class="btn btn-success" href="{{route('designation.edit',$designation->id)}}">Edit</a>
  <a class="btn btn-danger" href="{{route('designation.delete',$designation->id)}}">Delete</a> 
      <!-- <a class="btn btn-danger" href="">Delete</a>  -->
    
    </td> 

</tr>
      

@endforeach
</tbody>
</table>

<div class="text-center">
<a href="{{route('designation.form')}}" class="btn btn-warning">Add Designation</a>
<a href="{{route('designation.report')}}" class="btn btn-success">Report</button></a>
</div>

@endsection