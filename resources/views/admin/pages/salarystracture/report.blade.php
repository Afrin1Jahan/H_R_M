@extends('admin.master')
@section('content')
<div id="printDiv">
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">DesignationType</th>
            <th scope="col">Title</th>
            <th scope="col">Basic</th>
            <th scope="col">HouseAllowance</th>
            <th scope="col">TransportAllowance</th>
            <th scope="col">MedicalAllowance</th>
            <th scope="col">Total</th>


        </tr>
    </thead>
    <tbody>


        @foreach($salarystracturess as $key=>$salarystracture)
        <tr>


            <th scope="row">{{$key+1}}</th>

            <td>{{$salarystracture->relDesignation->title}}</td>


            <td>{{$salarystracture->Title}}</td>
            <td>{{$salarystracture->Basic}}BDT</td>
            <td>{{$salarystracture->HouseAllownce}} BDT</td>
            <td>{{$salarystracture->TransportAllowance}}BDT</td>
            <td>{{$salarystracture->MedicalAllowance}}BDT</td>

            <td>{{$salarystracture->Total}}BDT</td>
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