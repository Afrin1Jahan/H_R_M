@extends('admin.master')

@section('content')

<div id="printDiv">

    <table class="table table-striped">
        <thead>
            <tr>

                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Department</th>
                <th scope="col">Designation</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($employees as $key=> $employee)

            <tr>
                <th scope="row">{{$key+1, }}</th>

                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>
                    <img style="border-radius: 60px;" width="7%" src="{{url('/uploads/'.$employee->image)}}" alt="No Image">
                </td>

                <td>{{optional($employee->departmentrel)->Name}}</td>
                <td>{{optional($employee->designationrel)->title}}</td>
                @endforeach



        </tbody>
    </table>


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