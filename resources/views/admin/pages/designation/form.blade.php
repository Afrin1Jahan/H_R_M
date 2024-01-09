@extends('admin.master')
@section('content')


<form action="{{route('designation.store')}}"method="post">

@csrf

     
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title</label>
      <input required type="text" class="form-control" name="designation_title" id="" placeholder="input title">

      @error('designation_title')
      <div class="alert alert-danger">{{$messege}}</div>
      @enderror
    </div>



<!-- <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">employee_id</label>
      <input type="text" class="form-control" name="employee_id" id="inputEmail4" placeholder="no">

      @error('employee_id')
      <div class="alert alert-danger">{{$messege}}</div>
      @enderror

</div> -->

    <div class="form-group col-md-6">
      <label for="inputPassword4">Description</label>
      <textarea required type="textarea" name="designation_description" class="form-control" id="inputdescription" cols="80" rows="5"></textarea>
      <!-- <input type="textarea" class="form-control" name="designation_description" id="inputPassword4" placeholder="text"> -->
    </div>


  <!-- </div>
  <div class="form-group">
    <label for="inputAddress">Date</label>
    <input type="text" class="form-control" name="designation_date" id="inputAddress" placeholder="date">
  </div>
  -->
  <div class="form-group col-md-6">
      <label for="inputPassword4">Department</label>
      <select required type="textarea" class="form-control" id="" placeholder="Enter department" name="department">

      @foreach (  $departments as $dept)
      <option value="{{ $dept->id}}">{{ $dept->Name}}</option>
       @endforeach
      </select> 
   

      <!-- <input type="textarea" class="form-control" name="department" id="inputPassword4" placeholder="text"> -->
    </div>


 
<!-- 
  <div class="form-group col-md-6">
    <label for="inputAddress">Date</label>
    <input required type="date" class="form-control" name="designation_date" id="inputAddress" placeholder="date">
  </div> -->
 
  
  <button type="submit" class="btn-info bg-info btn-primary">submit</button>
</form>



@endsection