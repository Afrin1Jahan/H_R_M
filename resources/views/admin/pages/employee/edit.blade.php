@extends('admin.master')
@section('content')

<form action="{{route('employee.store',$employees->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">EnterName</label>
            <input value="{{$employees->EnterName}}" type="trxt" class="form-control" id="inputEmail4" placeholder="Email">
        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Email</label>
            <input value="{{$employees->Email}}" type="password" class="form-control" id="inputPassword4" placeholder="mail" name='Employee_Email'>
        </div>
    </div>



    <button type="submit" class="btn btn-primary">submit</button>


</form>

@endsection