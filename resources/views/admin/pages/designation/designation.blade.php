@extends('admin.master')
@section('content')

<H1>Designation Identity</H1>

<a href="{{route('designation.list')}}" type="button" class="btn btn-warning">More Details</a>
<table class="table table-hover">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Shift</th>
      <th scope="col">Gender</th>
      <th scope="col">Image</th>
      <th scope="col">Dob</th>
      <th scope="col">Hire Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>201032</td>
      <td>Mr Karim</td>
      <td>Day</td>
      <td>Male</td>
      <td>....</td>
      <td>12.12.1994</td>
      <td>09.09.2022</td>
      <td>....</td>

    </tr>
    <tr>
    <th scope="row">2</th>
      <td>201033</td>
      <td>Mr Rahim</td>
      <td>Morning</td>
      <td>Male</td>
      <td>....</td>
      <td>12.12.1995</td>
      <td>09.09.2023</td>
      <td>....</td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>201032</td>
      <td>Ms Layla</td>
      <td>Morning</td>
      <td>Female</td>
      <td>....</td>
      <td>12.12.1993</td>
      <td>09.09.2021</td>
      <td>....</td>
    </tr>
  </tbody>
</table>







@endsection