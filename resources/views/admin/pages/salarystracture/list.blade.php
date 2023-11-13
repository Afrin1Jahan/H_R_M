@extends('admin.master')
@section('content')

<h1>Salarystracture Information</h1>

<a href="{{route('salary.form')}}"  class="btn btn-primary">click for more</a>

<table class="table table-hover table-white">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>


  @foreach  ($salarystractures as $salarystracture)




    <tr>
  
    <td>{{$salarystracture->id}}</td>
       <td>{{$salarystracture->name}}</td>
      <td>{{$salarystracture->description}}</td>
      <td>{{$salarystracture->amount}}</td>
      <td>{{$salarystracture->status}}</td>
      <td>{{$salarystracture->type}}</td>
      </tr>


   @endforeach
    

  </tbody>

</table>



{{$salarystractures->links()}}


@endsection