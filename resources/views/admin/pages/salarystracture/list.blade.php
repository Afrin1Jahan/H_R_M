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
      <th scope="col">DepartmentType</th>
      <th scope="col">amount</th>
      
    </tr>
  </thead>
  <tbody>


  @foreach($salarystracturess as $key=>$salarystracture)
  <tr>
  

<th scope="row">{{$key+1}}</th>

<!-- <td>{{$salarystracture->id}}</td> -->
       <td>{{$salarystracture->relDesignation->DesignationType}}</td>
       <td>{{$salarystracture->DepartmentType}}</td>
      <td>{{$salarystracture->amount}}</td>
     
      </tr>


   @endforeach
    

  </tbody>

</table>
<div class="text-center">
<a href="{{route('salary.form')}}"  class="btn btn-warning">Add Salarystracture</a>
</div>





@endsection