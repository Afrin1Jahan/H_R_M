@extends('admin.master')
@section('content')



<form action="{{route('payroll.store')}}" method="post">

@csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">payroll date</label>
      <input type="date" class="form-control" id="validationDefault01" placeholder="First name" name="payroll_date" required>
    </div>
    
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">overtime</label>
      <input type="date" class="form-control" id="validationDefault01" placeholder="First name" name="overtime" required>
    </div>

    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">bonus</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="bonus" required>
    </div>


    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">payroll method</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="payroll_method" required>
    </div>




  <button class="btn btn-primary" type="submit">Submit form</button>
</form>


@endsection