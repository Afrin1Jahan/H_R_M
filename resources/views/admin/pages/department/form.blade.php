@extends('admin.master')
@section('content')
<form action="{{route('department.store')}}"method="post">

  @csrf


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">enter name</label>
      <input required type ="text" name="department_name" class="form-control" id="inputname" placeholder="Text">
      @error('department_name')
      <div class= "alert alert-danger">{{$message}}</div>
      @enderror

    </div>


    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputid">employee_id</label>
      <input type ="text" name="employee_id" class="form-control" id="inputname" placeholder="Text">
      @error('employee_id')
      <div class= "alert alert-danger">{{$message}}</div>
      @enderror

    </div>



    <div class="form-group col-md-6">
      <label for="inputtextarea">description</label>
      <textarea name="inputtextarea" name="description_name" class="form-control" id="inputdescription" cols="80" rows="5"></textarea>
    </div>


    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnumber">no</label>
      <input required type ="text" name="department_no" class="form-control"  placeholder="Text">
      @error('department_no')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>


    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlocation">location</label>
      <input type ="text" name="department_location" class="form-control" id="inputEmail4" placeholder="Text">
    </div>
    


    
 <button type="submit" class="btn btn-primary">Sign in</button>
</form>

@endsection