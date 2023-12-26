@extends('frontend.master')

@section('content')


<form action="{{route('setup.show')}}">


@foreach($setups as $setup)
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$setup->name}}</h5>
    <h5 class="card-title">{{$setup->address}}</h5>
    <h5 class="card-title">{{$setup->logo}}</h5>
    <h5 class="card-title">{{$setup->email}}</h5>
    <h5 class="card-title">{{$setup->phone}}</h5>
    <h5 class="card-title">{{$setup->aboutus}}</h5>
    
  </div>
</div>
  @endforeach
</form>




@endsection