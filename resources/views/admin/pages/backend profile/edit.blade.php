@extends('admin.master')
@section('content')


<form action="{{route('profile.update')}}" method="post">
    @csrf
    @method('put')


  
    <div class="form-group col-md-6">
      <label for="inputname">name</label>
      <input value="{{auth()->user()->name}}" required type="Edit name" class="form-control" id="inputname" placeholder="Enter name" name="name">
 

    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">email</label>
      <input  value="{{auth()->user()->email}}" required type=" email" class="form-control" id="inputEmail4" placeholder="Enter email" name="email">
    </div>

    
 
    <div class="form-group col-md-6">
      <label for="Edit role">role</label>
      <input value="{{auth()->user()->role}}" required type="text" class="form-control" id="inputrole" placeholder="Enter role" name=" role">
    
    
      <div class="container">
    <div class="row text-center">
      <div class="col-12">
   <!-- <div class="form-row-l text-center"> -->
      <button type="submit" class="btn-info bg-info btn-primary">Submit</button>
    </div>
    </div>
    </div>


@endsection