@extends('admin.master')
@section('content')
<H2>   Leave  </H2>

<a href="{{route('leave.form')}}"  class="btn btn-warning">Create Leave</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">employee_id</th>
     
      <th scope="col">Start Date</th>
      <th scope="col">start_time</th>
      <th scope="col">end_date</th>
      <th scope="col">end_time</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody>


  @foreach ( $leave as $key=> $data)

<tr>
<th scope="row">{{$key+1,}}</th>


      <td>{{$data->user_id}}</td>
      
      <td>{{$data->start_date}}</td>
      <td>{{$data->start_time}}</td>
      
      
      <td>{{$data->end_date}}
      <td>{{$data->end_time}}
        
      </td>
      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-warning" href="">Delete</a>
    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection