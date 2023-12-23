@extends('admin.master')
@section('content')





<form action="{{route('users.store')}}" method="post"  enctype="multipart/form-data">


    
@if(session()->has('myError'))
        <p class="alert alert-danger">{{session()->get('myError')}}</p>
        @endif

        @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif


@csrf
<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="">Enter User Name:</label>
        <input required type="text" class="form-control" id="" placeholder="Enter name" name="user_name">
        @error('user_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>



<div class="form-row">
    <div class="col-md-4 mb-3">
            <label for="">Select Role</label>
            <select type="text" class="form-control" id="" placeholder="enter role" name="role">

                <option value="Employee">Employee</option>
                <option value="admin">Admin</option>
               
            </select>

        </div>
</div>


<div class="form-row">
    <div class="col-md-4 mb-3">
            <label for="">Enter Email</label>
            <input required type="email" class="form-control" placeholder="Enter Email" name="user_email">

            @error('user_email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
</div>



       
 <div class="form-row">
    <div class="col-md-4 mb-3">     <label for="">Enter Password: </label>
            <input required type="password" class="form-control" placeholder="Enter password" name="user_password">

            @error('user_password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
 </div>

 <div class="form-row">
    <div class="col-md-4 mb-3">
            <label for="">Upload Image</label>
            <input name="user_image" type="file" class="form-control">
        </div>
</div>
     
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="">Department</label>

      <select class="form-control" id=""  placeholder="Enter department" name="Department" >
      @foreach ( $departments as $dept)
      <option value="{{$dept->id}}">{{$dept->Name}}</option>
       @endforeach
      </select>
      <!-- <input  type name="Department"  class="form-control"  placeholder="Enter department" name="Department"  > -->
     
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Designation</label>

<select class="form-control" id=""  placeholder="Enter designation" name="Designation" >
      @foreach ( $desigantions as $desi)
      <option value="{{$desi->id}}">{{$desi->title}}</option>
       @endforeach
      </select>  
      <!-- <input  type name="Designation"   class="form-control"  placeholder="Enter designation" name="Designation"   > -->
      
    </div>


        <button type="submit" class="btn-info bg-info btn-primary">Submit</button>
</form>

@endsection