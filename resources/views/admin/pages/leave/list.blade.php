@extends('admin.master')
@section('content')


<H2>   Leave Request </H2>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>   
      <th scope="col">leavetype</th>
      <th scope="col">start_date</th>
      <th scope="col">end_date</th>
      <th scope="col">Total days</th>
      <th scope="col">emergency_contact</th>
      <th scope="col">reason_for_leave</th>
      <th scope="col">status</th>
      @if(auth()->user()->role=='admin')
      <th scope="col">Action</th>
       @endif
      </tr>
  </thead>
  <tbody>

  @foreach ( $leaves as $key=> $leave)
  
  <tr>
<th scope="row">{{$key+1,}}</th>
<td>{{$leave->relLeavetype->Leavename}}</td>
<td>{{$leave->start_date}}</td>
<td>{{$leave->end_date}}</td>
<td>{{$leave->no_of_days}}</td>
<td>{{$leave->emergency_contact}}</td>
<td>{{$leave->reason_for_leave}}</td>
<td>{{$leave->status}}</td>
      </td>
      <td>

      @if ($leave->status == 'pending' && (auth()->user()->role=='admin'))
      
        <a class="btn btn-success" href="{{route('leave.approved',$leave->id)}}">Approve</a>
        <a class="btn btn-warning" href="{{route('leave.reject',$leave->id)}}">Reject</a>
        
       
     @endif


        
    </tr>
  

   

    @endforeach
    
  </tbody>
  {{$leaves->links()}}
</table>

<div class="text-center">
<a href="{{route('leave.form')}}"  class="btn-info bg-info btn-Danger">Application for Leave</a>
</div>

@endsection
     











