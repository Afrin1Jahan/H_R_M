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