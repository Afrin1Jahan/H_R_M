@extends('admin.master')
@section('content')

<form action="{{route('salary.update',$salarystracturess->id )}}" method="post">
  @csrf
  
@method('put')
  <div class="form-row">

    <div class="col-md-4 mb-6">
      <label for="inputEmail4">Designation Type</label>
      <input value="{{$salarystracturess->DesignationType}}" type="text" class="form-control" id="" placeholder="Entertype" name="DesignationType">

    </div>



    <div class="col-md-4 mb-6">
      <label for="">Title</label>
      <input value="{{$salarystracturess->Title}}" required type="text" class="form-control" id="" placeholder="Enter title" name="title">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>


    <div class="col-md-4 mb-6">
      <label for="">Basic</label>
      <input value="{{$salarystracturess->Basic}}" required type="text" class="form-control" id="" placeholder="Enter basic" name="basic">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>



    <div class="col-md-4 mb-6">
      <label for="">House Allowance</label>
      <input value="{{$salarystracturess->HouseAllowance}}" required type="text" class="form-control" id="" placeholder="Enter ammount" name="houseallowance">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>

    <div class="col-md-4 mb-6">
      <label for="">Transport Allowance</label>
      <input value="{{$salarystracturess->TransportAllowance}}" required type="text" class="form-control" id="" placeholder="Enter ammount" name="transportallowance">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>


    <div class="col-md-4 mb-6">
      <label for="">Medical Allowance</label>
      <input value="{{$salarystracturess->MedicalAllowance}}" required type="text" class="form-control" id="" placeholder="Enter ammount" name="medicalallowance">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>

    



    <button type="Submit" class="btn-info bg-info btn-primary">Submit</button>

</form>

@endsection