@extends('admin.master')

@section('content')


<div id="printDiv" >

<table class="table table-hover">
  <thead>
  <tr>
      <th scope="col">id</th>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">No</th>
      <th scope="col">Location</th>
      
    </tr>
  </thead>

  <tbody>
  @foreach ($departments as $key=>$department)
  <tr>
  <th scope="row">{{$key+1}}</th>
      <!-- <th> {{$department ->id}}</th> -->
      <td>{{$department-> Name}}</td>
      <td>{{$department-> Description}}</td>
      <td>{{$department-> No}}</td>
      <td>{{$department-> Location}}</td>


       
      @endforeach
 
 </tbody>
</table>


</div>
<div class="text-center">
<button class="btn btn-success" onclick="printContent('printDiv')">Print</button>




@endsection
@push('yourJsCode')
  
<script type="text/javascript">
      
      function printContent(el){
          var restorepage = $('body').html();
          var printcontent = $('#' + el).clone();
          $('body').empty().html(printcontent);
          window.print();
          $('body').html(restorepage);
      }
  
  </script>
@endpush