@extends('admin.master')
@section('content')

<form action="{{route('company.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-md-4 mb-6">
            <label for="inputEmail4">ComapanyName</label>
            <input type="text" class="form-control" placeholder="" name="company_name">
        </div>


        <div class="row">
            <div class="col">
                <label for="inputEmail4">ComapanyAddress</label>
                <input type="text" class="form-control" placeholder="" name="company_address">
            </div>


            

            <div class="col-md-4 mb-6">
                <label for="">CompanyLogo</label>
                <input type="file" class="form-control" id="" placeholder="Enter logo" name="companylogo">


            </div>



            <div class="col-md-4 mb-6">
                <label for="">Email</label>
                <input required type="text" class="form-control" id="" placeholder="Enter mail" name="email">
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="col-md-4 mb-6">
                <label for="">Phone</label>
                <input required type="text" class="form-control" id="" placeholder="Enter Phone" name="phone">
            </div>


            <div class="col-md-4 mb-6">
                <label for="">AboutUs</label>
                <input required type="text" class="form-control" id="" placeholder="Enter aboutus" name="aboutus">
            </div>
          
        </div>
        <button type="Submit" class="btn-info bg-info btn-primary">Submit</button>
</form>





@endsection