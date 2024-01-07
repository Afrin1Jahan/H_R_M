@extends('admin.master')
@section('content')



<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      </tr>
     </thead>
      <tbody>

  @foreach ( $notice as $key=> $notices)
  <tr>
   <th scope="row">{{$key+1,}}</th>
       <td>{{$notices->title}}</td>
      <td>{{$notices->date}}</td>
      
    </tr>
 
    @endforeach
  </tbody>
</table>
<div class="text-center">
<a href="{{route('notice.form')}}"  class="btn btn-warning">Create Notice</a>
</div>
@endsection