<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\payroll;
use App\Models\Employee;
use App\Models\Salarystracture;
use Illuminate\Http\Request;
use OutOfBoundsException;

class PayrollController extends Controller
{
    public function list(){

        $payrolls = Payroll::all();
        return view("admin.pages.payroll.list",compact('payrolls'));

    }



    public function form($employee_id){
    //    dd('hi');
        // $payrolls =payroll::all();
       
        $employees = Employee::find($employee_id);
        return view("admin.pages.payroll.form",compact('employees'));
    }


    public function store(Request $request){
        // dd($request-> all());


     payroll::create([
    

     "employee_name"=>$request->employee,
     "select_month"=>$request->month,
     "select_year"=>$request->year,
     "basic_salary"=>$request->basic,
     "house_allowance"=>$request->houseallowance,
     "medical_allowance"=>$request->medicalallowance,
     "transport_allowance"=>$request->transportallowance,
     
   "total"=>$request->basic+$request->houseallowance+$request->medicalallowance+$request->transportallowance
     ]);

     return redirect()->back();

    }
}
