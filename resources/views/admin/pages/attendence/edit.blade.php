@extends('admin.master')
@section('content')


<form action="{{route('attendence.update',$attendences->id)}}"method="post">

@csrf
@method('put')
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">employee name</label>
      <input value="{{$attendences->name}}"   required type="text" class="form-control" id="inputname" placeholder="name" name="employee_name">
    </div>


    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"> email </label>
      <input  value="{{$attendences-> email}}"  required type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>



 
   
  <button type="submit" class="btn btn-primary">Submit</button>

</form>



@endsection