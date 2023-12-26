@extends('admin.master')
@section('content')
<div class="text-center fw-bold">
<h1>Salarystracture Information</h1>
<div>


<table class="table table-hover table-white">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">DesignationType</th>
      <th scope="col">Title</th>
      <th scope="col">Basic</th>
      <th scope="col">HouseAllowance</th>
      <th scope="col">TransportAllowance</th>
      <th scope="col">MedicalAllowance</th>
      <th scope="col">Total</th>
     
    </tr>
  </thead>
  <tbody>


  @foreach($salarystracturess as $key=>$salarystracture)
  <tr>
  

<th scope="row">{{$key+1}}</th>

<!-- <td>{{$salarystracture->id}}</td> -->
       <td>{{$salarystracture->relDesignation->title}}</td>
      
      <td>{{$salarystracture->Title}}</td>
      <td>{{$salarystracture->Basic}}</td>
      <td>{{$salarystracture->HouseAllownce}}</td>
      <td>{{$salarystracture->TransportAllowance}}</td>
      <td>{{$salarystracture->MedicalAllowance}}</td>
    
      <td>{{$salarystracture->Total}}</td>
    
      </tr>


   @endforeach
    

  </tbody>

</table>
<div class="text-center">
<a href="{{route('salary.form')}}"  class="btn btn-warning">Add Salarystracture</a>
</div>





@endsection