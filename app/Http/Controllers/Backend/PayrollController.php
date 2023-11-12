<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\payroll;
use Illuminate\Http\Request;
use OutOfBoundsException;

class PayrollController extends Controller
{
    public function payroll(){

        
        return view("admin.pages.payroll.list");

    }



    public function list(){

        // $payrolls =payroll::all();
        return view("admin.pages.payroll.form");
    }


    public function store(Request $request){
        // dd($request-> all());


     payroll::create([
    

     "payroll_date"=>$request->payroll_date,
     "overtime"=>$request->overtime,
     "bonus"=>$request->bonus,
     "payroll_method"=>$request->payroll_method,

     ]);

     return redirect()->back();

    }
}
