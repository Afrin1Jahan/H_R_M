@extends('admin.master')
@section('content')
<h5>Payroll System</h5>

<a href="{{url('/payroll/list')}}"  class="btn btn-danger">Click</a>


<table class="table table-white">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Payroll Date</th>
      <th scope="col">Overtime</th>
      <th scope="col">Bonus</th>
      <th scope="col">Payroll Method</th>
    </tr>
  </thead>
  <tbody>

 

    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   
  </tbody>
</table>




@endsection