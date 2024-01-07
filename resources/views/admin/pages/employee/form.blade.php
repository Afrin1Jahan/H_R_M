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
            <label for="">Select Role</label>
            <select required type="text" class="form-control" id="" placeholder="enter role" name="role">

                <option value="Employee">Employee</option>
                <option value="admin">Admin</option>
               
            </select>

        </div> 

        <div class="form-group col-md-6">
            <label for="">Enter Password: </label>
            <input required type="password" class="form-control" placeholder="Enter password" name="user_password">

            @error('user_password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

<div class="form-group col-md-6">
      <label for="">image</label>
      <input  name="Employee_image"  type="file" class="form-control" >
      </div>

   
     <div class="form-group col-md-6">
      <label for="">Department</label>
      <select type="text" class="form-control" id="" placeholder="Enter department" name="Department">
      <!-- <input  type="text"  class="form-control"  placeholder="Enter department" name="Department"  > -->
      @foreach (  $departments as $dept)
      <option value="{{ $dept->id}}">{{ $dept->Name}}</option>
       @endforeach
      </select> 
    </div>
    
    
    <div class="form-group col-md-6">
      <label for="">Designation</label>
      <select type="text" class="form-control" id="" placeholder="Enter designation" name="Designation">
      @foreach ( $designations as $desi)
      <option value="{{$desi->id}}">{{$desi->title}}</option>
       @endforeach
      </select>  
    </div>
    
    
<button type ="submit" class="btn-info bg-info btn-primary">Submit</button> </div>
</form>

@endsection  