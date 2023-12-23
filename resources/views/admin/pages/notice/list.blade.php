@extends('admin.master')
@section('content')



<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">date</th>
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