@extends('admin.master')
@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">CompanyName</th>
      <th scope="col">CompanyAddress</th>
      <th scope="col">Logo</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">AboutUs</th>
      <th scope="col">Action</th>
      </tr>
     </thead>
      <tbody>

     
  @foreach($setups as $key=>$setupp)
  <tr>
  
   <th scope="row">{{$key+1,}}</th>
       <td>{{$setupp->name}}</td>
      <td>{{$setupp->address}}</td>
      <td>
            <img style="border-radius: 60px;" width="50%" src="{{url('/uploads/'.$setupp->logo)}}" alt="">
        </td>
        
      <td>{{$setupp->email}}</td>
      <td>{{$setupp->phone}}</td>
      <td>{{$setupp->aboutus}}</td>
      <td>
          
            <a class=" btn btn-warning" href="">Edit</a>
            <a  class="btn btn-danger"href="{{route('company.delete',$setupp->id)}}">Delete</a>
        </td>

    </tr>
 
    @endforeach
  </tbody>
</table>
<div class="text-center">
<a href="{{route('company.form')}}"  class="btn btn-warning">Company Setup</a>
</div>

@endsection