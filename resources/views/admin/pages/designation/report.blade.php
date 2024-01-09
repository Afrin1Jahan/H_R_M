@extends('admin.master')

@section('content')

<div id="printDiv" >

<table class="table table-hover">
  <thead>
  <tr>
      
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Department</th>
      <!-- <th scope="col">Date</th> -->
     
      <!-- <th scope="col">Status</th> -->
    
    </tr>
  </thead>
  <tbody>


  @foreach($designations as $key=>$designation)



  <tr>
  <th scope="row">{{$key+1}}</th>
  <td>{{$designation->title}}</td> 
  <td>{{$designation->description}}</td> 
  <td>{{optional($designation->departmentRel)->Name}}</td> 
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