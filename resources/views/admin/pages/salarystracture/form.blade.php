@extends('admin.master')
@section('content')

<form action="{{route('salary.store')}}" method="post">
  @csrf
  <div class="form-row">

    <div class="col-md-4 mb-6">
      <label for="inputEmail4">DesignationType</label>
      <select type="text" class="form-control" id="" placeholder="Entertype" name="DesignationType">

        @foreach ( $designations as $designation)
        <option value="{{$designation->id}}">{{$designation->title}}</option>
        @endforeach
      </select>
    </div>



    <div class="col-md-4 mb-6">
      <label for="">Title</label>
      <input required type="text" class="form-control" id="" placeholder="Enter title" name="title">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>


    <div class="col-md-4 mb-6">
      <label for="">Basic</label>
      <input required type="text" class="form-control" id="" placeholder="Enter basic" name="basic">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>



    <div class="col-md-4 mb-6">
      <label for="">HouseAllowance</label>
      <input required type="text" class="form-control" id="" placeholder="Enter ammount" name="houseallowance">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>

    <div class="col-md-4 mb-6">
      <label for="">TransportAllowance</label>
      <input required type="text" class="form-control" id="" placeholder="Enter ammount" name="transportallowance">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>


    <div class="col-md-4 mb-6">
      <label for="">MedicalAllowance</label>
      <input required type="text" class="form-control" id="" placeholder="Enter ammount" name="medicalallowance">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>

    <!-- <div class="form-group col-md-6">
      <label for="inputtextarea">amount</label>
      <textarea name="inputtextarea" name="salary_description" class="form-control" id="inputdescription" cols="80" rows="5"></textarea>
    </div> -->




    <!-- <div class="form-group col-md-6">
      <label for="inputEmail4">status</label>
      <input type="text" name="salary_status" class="form-control" id="inputstatus" placeholder="Enputstatus">
    </div> -->

    <!-- <div class="form-group col-md-6">
      <label for="inputEmail4">type</label>
      <input type="text" name="salary_type" class="form-control" id="inputtype" placeholder="Enputtype"> -->
    <!-- <select name="salary_type" id=""></select> -->

    <!-- <select class="form-select" name="salary_type" aria-label="Default select example">
        <option selected>Employee salary type</option>
        
        @foreach($employees as $employee)
        <option value="1">{{$employee->name}}</option>
        @endforeach
        
      </select> -->



    <button type="Submit" class="btn-info bg-info btn-primary">Submit</button>

</form>

@endsection