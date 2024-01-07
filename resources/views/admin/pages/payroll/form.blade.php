@extends('admin.master')
@section('content')



<form action="{{route('payroll.store')}}" method="post">

@csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Employee Name</label>
      <input type="hidden" value="{{$employees->id}}" name="employee_id">
     <input readonly type="text" class="form-control" id="validationDefault01" placeholder="employee name" name="employee" value="{{ $employees->name}}"> 
      
   
</div>
     <!-- <input type="text" class="form-control" id="validationDefault01" placeholder="employee name" name="employee" required>
    </div> -->
    
    
    <div class="col-md-4 mb-5">
    <label for="">Select Month</label>
            <select type="text" class="form-control" id="" placeholder="enter month" name="month">
      <option value="1">January</option>
      <option value="2">February</option>
      <option value="3">March</option>
      <option value="4">April</option>
      <option value="5">May</option>
      <option value="6">june</option>
      <option value="7">july</option>
      <option value="8">August</option>
      <option value="9">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
      </select>
      
    </div>



    <div class="col-md-4 mb-5">
      <label for="year">Select Year</label>
      <!-- <label for="year">Year:</label> -->
    <select type="text"  class="form-control" id="year" placeholder="enter month" name="year" >
    <option value="{{ now()->year -1}}">{{ now()->year -1}}</option>
    <option selected value="{{ now()->year }}">{{ now()->year }}</option>
    <option value="{{ now()->year + 1 }}">{{ now()->year + 1 }}</option>
    

    </select>
      <!-- <input type="text" class="form-control" id="validationDefault01" placeholder="enter month" name="year" required> -->
    </div>



    <div class="col-md-4 mb-6">
      <label for="">Basic Salary</label>
      <input readonly type="number" class="form-control" id="" placeholder="Enter basic" name="basic" value="{{$employees->designationRel->salaryStructure->Basic}}">

       
     <!-- <input required type="text" class="form-control" id="" placeholder="Enter basic" name="basic"> -->
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>




    <div class="col-md-4 mb-6">
      <label for="">House Allowance</label>
      <input readonly type="number" class="form-control" id="" placeholder="Enter amount" name="houseallowance" value="{{$employees->designationRel->salaryStructure->HouseAllownce}}">
      @error('text')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     
    </div>

    

    <!-- </div> -->

    <div class="col-md-4 mb-6">
      <label for="">Transport Allowance</label>
      <input readonly type="number" class="form-control" id="" placeholder="Enter amount" name="transportallowance" value="{{$employees->designationRel->salaryStructure->TransportAllowance}}">
      @error('number')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
      

     

    
    <div class="col-md-4 mb-6">
      <label for="">Medical Allowance</label>
      <input readonly type="number" class="form-control" id="" placeholder="Enter amount" name="medicalallowance" value="{{$employees->designationRel->salaryStructure->MedicalAllowance}}">
     
      @error('number')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror 

    </div>

  <button class="btn btn-info" type="submit">Submit</button>
</form>


@endsection