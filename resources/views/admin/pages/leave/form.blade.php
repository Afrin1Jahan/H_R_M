@extends('admin.master')
@section('content')


<form action="{{route('leave.store')}}" method="post">
    @csrf
   
<div class="form-group col-md-4">
      <label for="inputEmail4">leavetype</label>
      <select name="leavetype_id" class="form-control" id="">
      @foreach ( $leavetypes as $leave)
    <option value="{{$leave->id}}">{{$leave->Leavename}}</option>
    @endforeach
</select>

      
      <div class="form-group col-md-15">
      <label for="inputEmail4">start_date</label>
      <input required type="text" class="form-control" id="datepicker" placeholder="Start Date" name="start_date">
      </div>

      <div class="form-group col-md-15">
      <label for="inputEmail4">end_date</label>
      <input required type="text" class="form-control" id="datepicker2" placeholder="End Date" name="end_date">
      </div>

      <div class="form-group col-md-15">
      <label for="phone_number">emergency_contact</label>
      <input type="number" class="form-control" id="phone_number" placeholder="phone_number" name="emergency_contact">
      </div>


      <div class="form-group col-md-15">
      <label for="inputEmail4">reason_for_leave</label>
      <textarea class="form-control" name="reason_for_leave" placeholder="Enter reason" id="" ></textarea>
      </div>


      <button type="submit" class="btn btn-primary form-control bg-primary">Submit</button>

     
    @endsection

    @push('yourJsCode')
    <script>
    $(document).ready(function(){
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: new Date() // Set startDate to today to disable previous dates
        });
    });

    $(document).ready(function(){
        $('#datepicker2').datepicker({
            format: 'yyyy-mm-dd',
            startDate: new Date() // Set startDate to today to disable previous dates
        });
    });
</script>

    @endpush