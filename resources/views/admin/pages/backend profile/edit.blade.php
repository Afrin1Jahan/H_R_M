@extends('admin.master')
@section('content')


<form action="{{route('profile.update')}}" method="post">
    @csrf
    @method('put')


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">name</label>
      <input value="{{auth()->user()->name}}" required type="Edit name" class="form-control" id="inputname" placeholder="Enter name" name="name">
    </div>

    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">email</label>
      <input  value="{{auth()->user()->email}}" required type=" email" class="form-control" id="inputEmail4" placeholder="Enter email" name="email">
    </div>

    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Edit role">role</label>
      <input value="{{auth()->user()->role}}" required type="text" class="form-control" id="inputrole" placeholder="Enter role" name=" role">
    </div>


    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>


 

@endsection