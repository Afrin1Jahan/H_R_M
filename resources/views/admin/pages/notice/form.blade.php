@extends('admin.master')
@section('content')

<form action="{{route('notice.store')}}" method="post">
 @csrf


  <div>  
    <div class="form-group col-md-4">
      <label for="inputEmail4">Title</label>
      <textarea type="text" class="form-control" id="" name="title"  placeholder="Title" cols="100" rows="8" ></textarea>
    </div>

  
    <div class="form-group col-md-4">
      <label for="inputEmail4">Date</label>
      <input type="date" class="form-control" id="" name="date"    placeholder="date">
    </div>
  </div>
  <button  type="submit" class="btn-info bg-info btn-primary">submit</button>
</form>

@endsection