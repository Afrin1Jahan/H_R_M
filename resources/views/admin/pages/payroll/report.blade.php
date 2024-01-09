@extends('admin.master')
@section('content')
<div id="printDiv">
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
            <td>{{$payroll->basic_salary}}BDT</td>
            <td>{{$payroll->house_allowance}}BDT</td>
            <td>{{$payroll->medical_allowance}}BDT</td>
            <td>{{$payroll->transport_allowance}}BDT</td>
            <td>{{$payroll->total}}BDT</td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
<div class="text-center">
    <button class="btn btn-success" onclick="printContent('printDiv')">Print</button>
</div>
@endsection
@push('yourJsCode')

<script type="text/javascript">
    function printContent(el) {
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
    }
</script>

@endpush