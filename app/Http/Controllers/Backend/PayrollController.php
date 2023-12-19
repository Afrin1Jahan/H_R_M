<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\payroll;
use App\Models\Employee;
use Illuminate\Http\Request;
use OutOfBoundsException;

class PayrollController extends Controller
{
    public function list(){

        $payrolls = Payroll::all();
        return view("admin.pages.payroll.list",compact('payrolls'));

    }



    public function form(){
    //    dd('hi');
        // $payrolls =payroll::all();
        $employees = Employee::all();
        return view("admin.pages.payroll.form",compact('employees'));
    }


    public function store(Request $request){
        // dd($request-> all());


     payroll::create([
    

     "Employee"=>$request->employee,
     "Month"=>$request->month,
     "Year"=>$request->year,
     "Paysalary"=>$request->paysalary,
     "Monthlysalary"=>$request->monthlysalary,
     "Deductionammount"=>$request->deductionsalary,
     "Bonusammount"=>$request->bonusammount,
    
     ]);

     return redirect()->back();

    }
}
