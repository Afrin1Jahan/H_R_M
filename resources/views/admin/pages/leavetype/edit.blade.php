@extends('admin.master')
@section('content')
<form action="{{route('leavetype.store',$leavetypes->id)}}" method="post">
    @csrf



    <div class="form-group col-md-6">
      <label for="inputEmail4">Leave Type</label>
      <select type="text" class="form-control"  placeholder="leave type" name="leave_type">
      <option value="weekly holidays">weekly holidays</option>
       <option value="personal leave">personal leave</option> 
       <option value="ill leave">ill leave</option>
       <option value="festival leaves,">pfestival leaves,</option>
       <option value="maternity leave">maternity leave</option>
       <option value="annual leaves">annual leaves/option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">LeaveBalance</label>
      <input value="{{$leavetypes->LeaveBalance}}" type="number" class="form-control" id="" placeholder="balance" name="balance">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Description</label>
      <textarea  name="description_name" class="form-control" id="inputdescription" cols="80" rows="10"></textarea>
    </div>

  
  
    
  
  <button type="submit" class="btn-info bg-info btn-primary">Submit</button>
</form>


@endsection