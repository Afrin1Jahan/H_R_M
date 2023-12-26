@extends('admin.master')
@section('content')

<a href="{{route('leavetype.form')}}" button ="button" class="btn btn-dark">Add leave type</a>

<table class="table">
  <thead>
    <tr>
    
       <th scope="col">id</th>
     
      <th scope="col">Leavetype</th>
      <th scope="col">Balance</th>
      <th scope="col">Description</th>
   
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  @foreach ( $leavetypes as $key=> $leavetype)

<tr>
<th scope="row">{{$key+1,}}</th>
     
      <td>{{$leavetype->Leavetype}}</td>
      <td>{{$leavetype->Balance}}</td>
      <td>{{$leavetype->Description}}</td>
     
     

      <td>
        <a class="btn btn-success" href="{{route('leavetype.edit',$leavetype->id)}}">Edit</a>
        <a class="btn btn-warning" href="{{route('leavetype.delete',$leavetype->id)}}">Delete</a>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection