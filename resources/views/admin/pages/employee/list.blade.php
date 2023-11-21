@extends('admin.master')
@section('content')
<h1>Employee</h1>

<a href="{{route('employee.form')}}" class="btn btn-warning">Add new employee</a>

<!-- <h3>Data Table Employee</h3> -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <!-- <th scope="col">Department id</th> -->
      <th scope="col">name</th>
      <th scope="col">shift</th>
      <th scope="col">gender</th>
      <th scope="col">image</th>
      <th scope="col">dob</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($employees as $employee)

    <tr>
      <th scope="row">#</th>
      <th> {{$employee->id}}</th>
      <!-- <th> {{$employee->department_id}}</th> -->
      <td>{{$employee->name}}</td>
      <td>{{$employee-> shift}}</td>
      <td>{{$employee-> gender}}</td>
      <td>{{$employee->image}}</td>
      <td>{{$employee->dob}}</td>
      <td>{{$employee->action}}</td>


      <td>
        <img style="border-radius: 60px;" width="7%" src="{{url('/uploads/'.$employee->image)}}" alt="">
      </td>


      <td>{{$employee-> dob}}</td>

      <td>

        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>

      </td>

    </tr>


    @endforeach

  </tbody>
</table>

@endsection