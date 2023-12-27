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
    //    dd($employee_id);
        // $payrolls =payroll::all();
       
        $employees = Employee::with('designationrel.salaryStructure')->find($employee_id);
        // dd($employees);
        return view("admin.pages.payroll.form",compact('employees'));
    }


    public function store(Request $request){
        // dd($request-> all());

$check=payroll::where('employee_id',$request->employee_id)->where('select_month',$request->month)->where('select_year',$request->year)->first();
if($check)
{
    //already given
    notify()->warning('Already paid');
    return redirect()->back();
}else
    {
     
        payroll::create([
            "employee_id"=>$request->employee_id,
            "select_month"=>$request->month,
            "select_year"=>$request->year,
            "basic_salary"=>$request->basic,
            "house_allowance"=>$request->houseallowance,
            "medical_allowance"=>$request->medicalallowance,
            "transport_allowance"=>$request->transportallowance,
            
          "total"=>$request->basic+$request->houseallowance+$request->medicalallowance+$request->transportallowance
            ]);
            notify()->success('Salary paid successfully.');
            return redirect()->back();
    }
    


    }
}
