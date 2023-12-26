@extends('admin.master')
@section('content')



<form action="{{route('attendence.store')}}"method="post">

@csrf


<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">name</label>
      <input required type="text" class="form-control" id="inputid" placeholder="name" name="name">
      @error('name')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">employee id</label>
      <input required type="number" class="form-control" id="inputid" placeholder="id" name="employee_id">
      @error('employee_id')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>


    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">check_in</label>
      <input required type="time" class="form-control" id="inputintime" placeholder="intime" name="in_time">

      @error('in_time')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    
    </div>



     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">check_out </label>
      <input type="time" class="form-control" id="inputouttime" placeholder="out time" name="out_time">
      @error('out_time')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    
    </div>
 



    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">select_date</label>
      <input type="date" class="form-control" id="inputdate" placeholder="date" name="date">
      @error('date')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>


    
    <!-- <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"> status</label>
      <input type="text" class="form-control" id="inputstatus" placeholder="status" name="status">
    </div> -->
    

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">dutyhour</label>
      <input type="text" class="form-control" id="inputdate" placeholder="hour" name="duty_hour">
      @error('text')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>

    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">overtime</label>
      <input type="text" class="form-control" id="inputdate" placeholder="time" name="over_time">
      @error('text')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>

    
   
  <button type="submit" class="btn-info bg-info btn-primary">Submit</button>

</form>



@endsection