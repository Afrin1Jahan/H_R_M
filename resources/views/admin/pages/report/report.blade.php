@extends('admin.master')

@section('content')


<button class="btn btn-success" onclick="printContent('printDiv')">Print</button>
<div class="container" id="printDiv">
  

<table class="table">
 <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <!-- <th scope="col">Department</th>
      <th scope="col">Designation</th> -->
      <th scope="col">Role</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $key=>$User)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$User->name}}</td>
        <td>
            <img style="border-radius: 20px;" width="50%" src="{{url('/uploads/'.$User->image)}}" alt="">
        </td>
        
        <td>{{$User->email}}</td>
<!-- 
        <td>{{$User->Name	}}</td>
        <td>{{$User->title}}</td> -->
        <td>{{$User->role}}</td>
      

    </tr>
        
    @endforeach
 
  </tbody>
</table>
</div>



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