@extends('admin.master')

@section('content')
<h1>User List</h1>
<a href="{{route('users.create')}}"     class="btn btn-success">Create new User</a>
<a href="{{route('user.report')}}"     class="btn btn-success">Report</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $key=>$User)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$User->name}}</td>
        <td>
            <img style="border-radius: 60px;" width="50%" src="{{url('/uploads/'.$User->image)}}" alt="">
        </td>
        
        <td>{{$User->email}}</td>

        <td>{{$User->Department	}}</td>
        <td>{{$User->Designation}}</td>
        <td>{{$User->role}}</td>
        <td>
            <a class="btn btn-success" href="">View</a>
            <a class="btn btn-warning" href="">Edit</a>
            <a  class="btn btn-danger"href="">Delete</a>
        </td>

    </tr>
        
    @endforeach
 
  </tbody>
</table>

{{$users->links()}}


@endsection