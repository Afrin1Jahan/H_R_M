@extends('admin.master')
@section('content')


<form action="{{route('leave.store')}}" method="post">
    @csrf

<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">user_id</label>
      <select name="employee_id" class="form-control" id="">
        <option value="">Select One</option>

        @forelse($employees as $employee)
            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
        @empty
          <option value="">No Data Found</option>
        @endforelse
      </select>
      @error('employee_name')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>

    
  

   
   
    <div class="form-group col-md-4">
      <label for="inputEmail4">start_date</label>
      <input required type="date" class="form-control" id="" placeholder="date" name="start_date">
      
      @error('start_date')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
      
    </div>

    <div class="form-group col-md-4">
      <label for="inputEmail4">start_time</label>
      <input required type="time" class="form-control" id="" placeholder="time" name="start_time">
      
      @error('start_time')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>



   
    <div class="form-group col-md-4">
      <label for="inputEmail4">end_date</label>
      <input required type="date" class="form-control" id="" placeholder="date" name="end_date">

      @error('end_date')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror

      <div class="form-group col-md-4">
      <label for="inputEmail4">end_time</label>
      <input required type="time" class="form-control" id="" placeholder="time" name="end_time">
      
      @error('end_time')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>

      
    <div class="form-group col-md-4">
      <label for="inputEmail4">action</label>
      <input type="text" class="form-control" id="" placeholder="" name="action">

      <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection


















<html lang="en">
<head>
@notifyCss
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HumanResources</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <link rel="stylesheet" href="{{url('/css/frontend/css/style.css')}}">

</head>
<body>

  <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">


    




@include('frontend.partials.header')






@yield('content')





@include('frontend.partials.footer')


  </div>


<script src="{{url('js/scripts-all.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"> </script>


@notifyJs
</body>
</html>


<!-- header er file -->

<header class="templateux-navbar" role="banner">
  
       
  
      <div class="container"  data-aos="fade-down">
        <div class="row">

          <div class="col-3 templateux-logo">
          <a href="{{route('notice.show')}}" class=""> notice</a>
            <!-- <a href="index.html" class="animsition-link">HumanResources</a> -->
          </div>

    
          
       
        <div class="text-center text-black">
        <div class="container px-6 px-lg-7 my-50"> 
        <form action="{{ route('search.notice') }}" method="post">
          @csrf  
    <input type="text" name="search" placeholder="Search...">
    <button type="submit"class="btn btn-warning">Search</button>
    </form>
        </div>








        


          <nav class="col-9 site-nav">
            <button class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button> <!-- .templateux-toggle -->

            <ul class="sf-menu templateux-menu d-none d-md-block">
              <li class="active">
             
              </li>

              <span style="padding: 5px;">|</span>

              <li class="active">
              
              </li>
              
                 </div> <!-- .row -->
      </div> <!-- .container -->
    </header> <!-- .templateux-navba -->



    <!-- footer er tuku -->
    
    
<footer class="templateux-footer bg-light">
  <div class="container">

    <div class="row mb-5">
      <div class="col-md-4 pr-md-5">
        <div class="block-footer-widget">
          <h3>About</h3>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
      </div>

      <div class="col-md-8">
        <div class="row">
          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>Learn More</h3>
              <ul class="list-unstyled">
                <li><a href="#">How it works?</a></li>
                <li><a href="#">Useful Tools</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>Support</h3>
              <ul class="list-unstyled">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Help Desk</a></li>
                <li><a href="#">Knowledgebase</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>About Us</h3>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>Connect With Us</h3>
              <ul class="list-unstyled block-social">
                <li><a href="#" class="p-1"><span class="icon-facebook-square"></span></a></li>
                <li><a href="#" class="p-1"><span class="icon-twitter"></span></a></li>
                <li><a href="#" class="p-1"><span class="icon-github"></span></a></li>
              </ul>
            </div>
          </div>
        </div> <!-- .row -->

      </div>
    </div> <!-- .row -->

    <div class="row pt-5 text-center">
      <div class="col-md-12 text-center"><p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="text-danger icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p></div>
    </div> <!-- .row -->

  </div>
</footer> <!-- .templateux-footer -->

