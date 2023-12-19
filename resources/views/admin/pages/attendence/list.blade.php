@extends('admin.master')
@section('content')
<H1>Attendance List</H1>
<div>
<a href="{{route('attendence.checkin')}}"button ="button" class="btn btn-dark">Check-In</a>

<a href="{{route('attendence.checkout')}}"button ="button" class="btn btn-dark">Check-Out</a>


 <table class="table">
  <thead>
    <tr>
     
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">employee_id</th>
      <th scope="col">check_in</th>
      <th scope="col">check_out</th>
      <th scope="col">select_date</th>
      
    </tr>
  </thead>


  <tbody>
 @foreach($attendences as $key=>$attendence )
<tr>
    <th scope="row">{{$key+1}}</th>
   
    <td>{{$attendence->name }}</td>
  <td>{{$attendence->employee_id }}</td>
  <td>{{$attendence->check_in }}</td>
  <td>{{$attendence->check_out}}</td>
   <td>{{$attendence->select_date }}</td>

 <!-- <td>
    <a class="btn btn-primary" href="">View</a>
    <a class="btn btn-success" href="{{route('attendence.edit',$attendence->id)}}">Edit</a>
    <a class="btn btn-danger" href="{{route('attendence.delete',$attendence->id)}}">Delete</a> 
  
  </td>  -->
  </tr>

    @endforeach
  </tbody>
  </table> 
  </div>
  {{$attendences->links()}} 
    @endsection