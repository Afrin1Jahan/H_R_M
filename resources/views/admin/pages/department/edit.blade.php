@extends('admin.master')
@section('content')
<form action="{{route('department.update',$departments->id)}}"method="post">
 
  @csrf
@method('put')

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">enter name</label>
      <input value="{{$departments->name}}" required type ="text" name="department_name" class="form-control" id="inputname" placeholder="Text">
      @error('department_name')
      <div class= "alert alert-danger">{{$message}}</div>
      @enderror

    </div>


    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">employee_id</label>
      <input value="{{$departments->id}}" type ="text" name="employee_id" class="form-control" id="inputname" placeholder="Text">
      @error('employee_id')
      <div class= "alert alert-danger">{{$message}}</div>
      @enderror

    </div>



    <div class="form-group col-md-6">
      <label for="inputtextarea">description</label>
      <textarea name="inputtextarea" name="description_name" class="form-control" id="inputdescription" cols="80" rows="5">{{$departments->description}}
      </textarea>
    </div>


    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">no</label>
      <input value="{{$departments->no}}" type ="text" name="department_no" class="form-control"  placeholder="Text">
      @error('department_no')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>


    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">location</label>
      <input value="{{$departments->location}}" type ="text" name="department_location" class="form-control" id="inputEmail4" placeholder="Text">
    </div>
    


    
 <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection