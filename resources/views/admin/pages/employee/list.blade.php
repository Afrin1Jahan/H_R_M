@extends('admin.master')
@section('content')
<!-- <h1>Employee</h1> -->



<!-- <h3>Data Table Employee</h3> -->
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($employees as $key=> $employee)

    <tr>
      <th scope="row">{{$key+1, }}</th>

      <td>{{$employee->name}}</td>
      <td>{{$employee->email}}</td>
     <td>
        <img style="border-radius: 60px;" width="7%" src="{{url('/uploads/'.$employee->image)}}" alt="No Image">
      </td> 

      <td>{{optional($employee->departmentrel)->Name}}</td>
      <td>{{optional($employee->designationrel)->title}}</td>
    
      <td>

        <a class="btn btn-success" href="{{route('Employee.edit',$employee->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('Employee.delete',$employee->id)}}">Delete</a>
        <a href="{{route('payroll.form',$employee->id)}}" class="btn btn-danger">Create Payroll</a>
      </td>

    </tr>


    @endforeach

  </tbody>
</table>
<div class="text-center">
<a href="{{route('employee.form')}}" class="btn btn-warning text">Add new employee</a>
</div>
@endsection