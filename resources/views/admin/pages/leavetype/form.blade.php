@extends('admin.master')
@section('content')


<form action="{{route('leavetype.store')}}" method="post">
    @csrf



    <div class="form-group col-md-6">
      <label for="inputEmail4">leave type</label>
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
      <label for="inputPassword4">balance</label>
      <input type="number" class="form-control" id="" placeholder="balance" name="balance">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">description</label>
      <textarea  name="description_name" class="form-control" id="inputdescription" cols="80" rows="5"></textarea>
    </div>

  
  
    
  
  <button type="submit" class="btn-info bg-info btn-primary">Submit</button>
</form>



@endsection