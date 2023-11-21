@extends('admin.master')
@section('content')


<section style="background-color: #eee;">
  <!-- <div class="container py-5"> -->
  <div class="row">
      <!-- <div class="col"> -->
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          
        </nav>
      <!-- </div> -->
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{auth()->user()->name}}</h5>
            <p class="text-muted mb-1">{{auth()->user()->role}}</p>
            <p class="text-muted mb-4">{{auth()->user()->email}}</p>


            
            <a href="{{route('profile.edit')}}"  type="button" class="btn btn-primary" >Edit</a>
      
          </div>
        </div>
      




      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{auth()->user()->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Role</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{auth()->user()->role}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{auth()->user()->email}}</p>
              </div>
            </div>
            <hr>
           
</section>
@endsection