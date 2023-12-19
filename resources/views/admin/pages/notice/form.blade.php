@extends('admin.master')
@section('content')

<form action="{{route('notice.store')}}" method="post">
 @csrf


  <div>  
    <div class="form-group col-md-4">
      <label for="inputEmail4">title</label>
      <input type="text" class="form-control" id="" name="title"   placeholder="title">
    </div>

  
    <div class="form-group col-md-4">
      <label for="inputEmail4">date</label>
      <input type="date" class="form-control" id="" name="date"    placeholder="date">
    </div>
  </div>
  <button  type="submit" class="btn-info bg-info btn-primary">submit</button>
</form>

@endsection