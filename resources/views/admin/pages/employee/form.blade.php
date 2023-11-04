@extends('admin.master')
@section('content')

<form action="{{route('store.list')}}" method="post">
  @csrf

  <div class="form-row">

  <div class="form-group col-md-6">
      <label for="inputEmail4">Enter Name</label>
      <input required type="text" name="Employee_Name" class="form-control" id="inputEmail4" placeholder="EnterName">
      @error('Employee_Name')

      <div class= "alert alert-danger">{{$message}}</div>
      @enderror
    </div>



    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input  required  type="Email" name="Employee_Email" class="form-control" id="inputEmail4" placeholder="Enter e-mail">
      @error('Employee_Email')
      <div class= "alert alert-danger">{{$message}}</div>
      @enderror

    </div>



    
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input  required    type="phone" name="Employee_phone" class="form-control" id="inputEmail4" placeholder="Enter phone">
      @error('Employee_phone')
      <div class= "alert alert-danger">{{$message}}</div>
      @enderror

    </div>
     

    <div class="form-group col-md-6">
      <label for="inputEmail4">image</label>
      <input type="file"  name="Employee_image"   class="form-control" placeholder="image">
    </div>
    

    <div class="form-group col-md-6">
      <label for="inputEmail4">shift</label>
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