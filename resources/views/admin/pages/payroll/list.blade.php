@extends('admin.master')
@section('content')
<h5>Payroll System</h5>

<!-- <a href="{{route('payroll.form')}}"  class="btn btn-danger">Create Payroll</a> -->


<table class="table table-white">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Employee</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Paysalary</th>
      <th scope="col">Monthlysalary</th>
      <th scope="col">Deductionammount</th>
      <th scope="col">Bonusammount</th>
   
    </tr>
  </thead>
  <tbody>
  @foreach ( $payrolls as $key=> $payroll)
  <tr>
<th scope="row">{{$key+1,}}</th>
<td>{{$payroll->Employee}}</td>
<td>{{$payroll->Month}}</td>
<td>{{$payroll->Year}}</td>
<td>{{$payroll->Paysalary}}</td>
<td>{{$payroll->Monthlysalary}}</td>
<td>{{$payroll->Deductionammount}}</td>
<td>{{$payroll->Bonusammount}}</td>
    
    </tr>
    @endforeach
  </tbody>
</table>




@endsection