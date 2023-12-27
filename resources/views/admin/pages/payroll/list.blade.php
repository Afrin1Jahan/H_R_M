@extends('admin.master')
@section('content')
<h5>Payroll System</h5>


<table class="table table-white">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Select Month</th>
      <th scope="col">Select Year</th>
      <th scope="col">Basic Salary</th>
      <th scope="col">House Allowance</th>
      <th scope="col">Medical Allowance</th>
      <th scope="col">Transport Allowance</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  @foreach ( $payrolls as $key=> $payroll)
  <tr>
<th scope="row">{{$key+1,}}</th>
<td>{{$payroll->employee_id}}</td>
<td>{{$payroll->select_month}}</td>
<td>{{$payroll->select_year}}</td>
<td>{{$payroll->basic_salary}}</td>
<td>{{$payroll->house_allowance}}</td>
<td>{{$payroll->medical_allowance}}</td>
<td>{{$payroll->transport_allowance}}</td>
<td>{{$payroll->total}}</td>
    
    </tr>
    @endforeach
  </tbody>
</table>




@endsection