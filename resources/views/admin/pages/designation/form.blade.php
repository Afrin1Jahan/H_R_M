@extends('admin.master')
@section('content')


<form action="{{route('designation.store')}}"method="post">

@csrf


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title</label>
      <input required type="text" class="form-control" name="designation_title" id="inputEmail4" placeholder="Email">

      @error('designation_title')
      <div class="alert alert-danger">{{$messege}}</div>
      @enderror

</div>


    <div class="form-group col-md-6">
      <label for="inputPassword4">Description</label>
      <input type="textarea" class="form-control" name="designation_description" id="inputPassword4" placeholder="Password">
    </div>


  </div>
  <div class="form-group">
    <label for="inputAddress">Date</label>
    <input type="text" class="form-control" name="designation_date" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Status</label>
    <input type="text" class="form-control" name="designation_status"  id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>



@endsection