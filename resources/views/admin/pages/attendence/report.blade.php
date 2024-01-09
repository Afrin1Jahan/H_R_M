@extends('admin.master')
@section('content')
<div class="text-center" id="printDiv">
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">employee_id</th>
      <th scope="col">check_in</th>
      <th scope="col">check_out</th>
      <th scope="col">select_date</th>
      <th scope="col">dutyhour</th>
      <th scope="col">overtime</th>
    </tr>
  </thead>


  <tbody>
 @foreach($attendences as $key=>$attendence )
<tr>
    <th scope="row">{{$key+1}}</th>
   
    <td>{{$attendence->name }}</td>
  <td>{{$attendence->employee_id }}</td>
  <td>{{$attendence->check_in }}</td>
  <td>{{$attendence->check_out}}</td>
   <td>{{$attendence->select_date }}</td>
   <td>{{$attendence->dutyhour }}</td>
   <td>{{$attendence->overtime }}</td>
</tr>
   @endforeach
   </tbody>
</table>


</div>

<button class="btn btn-success" onclick="printContent('printDiv')">Print</button>



<script type="text/javascript">
      
      function printContent(el){
          var restorepage = $('body').html();
          var printcontent = $('#' + el).clone();
          $('body').empty().html(printcontent);
          window.print();
          $('body').html(restorepage);
      }
  
  </script>

@endsection



