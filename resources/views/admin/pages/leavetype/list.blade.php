@extends('admin.master')
@section('content')

<a href="{{route('leavetype.form')}}" button ="button" class="btn btn-dark">Add leave type</a>

<table class="table">
  <thead>
    <tr>
    
       <th scope="col">id</th>
     
      <th scope="col">leavetype</th>
      <th scope="col">balance</th>
      <th scope="col">description</th>
   
      <th scope="col">status</th>


    </tr>
  </thead>
  <tbody>
  @foreach ( $leavetypes as $key=> $leavetype)

<tr>
<th scope="row">{{$key+1,}}</th>
     
      <td>{{$leavetype->leavetype}}</td>
      <td>{{$leavetype->balance}}</td>
      <td>{{$leavetype->description}}</td>
     
     

      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-warning" href="">Delete</a>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection