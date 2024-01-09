@extends('admin.master')
@section('content')
<!-- <div class="text-center fw-bold"> -->
<h1>Salarystracture Information</h1>
<div>


  <table class="table table-white">
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
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>


      @foreach($salarystracturess as $key=>$salarystracture)
      <tr>


        <th scope="row">{{$key+1}}</th>

        <td>{{$salarystracture->relDesignation->title}}</td>


        <td>{{$salarystracture->Title}}</td>
        <td>{{$salarystracture->Basic}}BDT</td>
        <td>{{$salarystracture->HouseAllownce}} BDT</td>
        <td>{{$salarystracture->TransportAllowance}}BDT</td>
        <td>{{$salarystracture->MedicalAllowance}}BDT</td>

        <td>{{$salarystracture->Total}}BDT</td>

        <td><a class="btn btn-success" href="{{route('salary.edit',$salarystracture->id)}}">Edit</a>
        </td>

      </tr>


      @endforeach


    </tbody>

  </table>
  <div class="text-center">
    <a href="{{route('salary.form')}}" class="btn btn-warning">Add Salarystracture</a>

    <a href="{{route('salary.report')}}" class="btn btn-success">Report</button></a>
  </div>





  @endsection