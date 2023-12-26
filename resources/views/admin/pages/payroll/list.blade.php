@extends('admin.master')
@section('content')
<h5>Payroll System</h5>


<table class="table table-white">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Employee_Name</th>
      <th scope="col">Select_Month</th>
      <th scope="col">Select_Year</th>
      <th scope="col">Basic_Salary</th>
      <th scope="col">House_Allowance</th>
      <th scope="col">Medical_Allowance</th>
      <th scope="col">Transport_Allowance</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  @foreach ( $payrolls as $key=> $payroll)
  <tr>
<th scope="row">{{$key+1,}}</th>
<td>{{$payroll->employee_name}}</td>
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