@extends('frontend.master')
@section('content')
<form action="{{route('notice.show')}}">

@foreach($notice as $notices)
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$notices->title}}</h5>
    <h5 class="card-title">{{$notices->date}}</h5>
  </div>
</div>
  @endforeach
</form>
@endsection