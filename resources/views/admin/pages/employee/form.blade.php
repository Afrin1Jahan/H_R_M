@extends('admin.master')
@section('content')

<form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
  @csrf

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputName">Enter Name</label>
      <input required type="text" name="Employee_Name" class="form-control" id="" placeholder="EnterName">
      @error('Employee_Name')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>



    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input required type="Email" name="Employee_Email" class="form-control" id="inputEmail4" placeholder="Enter e-mail">
      @error('Employee_Email')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror

    </div>




    <div class="form-group col-md-6">
      <label for="inputNumber">Phone</label>
      <input required type="number" name="Employee_phone" class="form-control" id="number" placeholder="Enter phone">
      @error('Employee_phone')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>


    <div class="form-group col-md-6">
      <label for="inputdepertment">Department </label>
      <select class="form-select" name="department" aria-label="Default select example">
      <option selected>Enter department</option>

        @foreach($departments as $department)
        <option value="1">{{$department->name}}</option>
        @endforeach
    </div>



    <div class="form-group">
      <label for="">image</label>
      <input  name="Employee_image"  type="file" class="form-control" >
    </div>


    <div class="form-group col-md-6">
      <label for="inputEma">shift</label>
      <input type="text" name="Employee_shift" class="form-control" id="inputEmail4" placeholder="Enter shift">
    </div>



    <div class="form-group col-md-6">
      <label for="inputEmail4">dob</label>
      <input type="text" name="Employee_dob" class="form-control" id="inputEmail4" placeholder="Enter_dob
    ">
    </div>


    <div class="form-group col-md-6">
      <label for="inputEmail4">gender</label>
      <input type="text" name="Employee_gender" class="form-control" id="inputEmail4" placeholder="Enter gender">
    </div>


    <button type="submit" class="btn btn-info">Sign in</button>
</form>

@endsection  