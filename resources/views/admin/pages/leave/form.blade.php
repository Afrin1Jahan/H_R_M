@extends('admin.master')
@section('content')


<form action="{{route('leave.store')}}" method="post">
    @csrf
   
<div class="form-group col-md-4">
      <label for="inputEmail4">leavetype</label>
      <select name="leave_type" class="form-control" id="">
      @foreach ( $leavetypes as $leave)
    <option value="{{$leave->id}}">{{$leave->leavetype}}</option>
    @endforeach
</select>

      
      <div class="form-group col-md-15">
      <label for="inputEmail4">start_date</label>
      <input required type="date" class="form-control" id="" placeholder="" name="start_date">
      </div>

      <div class="form-group col-md-15">
      <label for="inputEmail4">end_date</label>
      <input required type="date" class="form-control" id="" placeholder="" name="end_date">
      </div>

      <div class="form-group col-md-15">
      <label for="phone_number">emergency_contact</label>
      <input type="text" class="form-control" id="phone_number" placeholder="phone_number" name="emergency_contact">
      </div>


      <div class="form-group col-md-15">
      <label for="inputEmail4">reason_for_leave</label>
      <input type="textarea" class="form-control" name="reason_for_leave" id="" placeholder="">
      </div>


      <div class="form-group col-md-15">
      <label for="inputEmail4">action</label>
      <input type="text" class="form-control" id="status" placeholder="status" name="action">
      </div> 

      <button type="submit" class="btn-info bg-info btn-primary">Submit</button>
    @endsection