<?php

namespace App\Http\Controllers;

use App\Models\Salarystracture;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalarystractureController extends Controller
{
    public function stracture(){


        $salarystractures= salarystracture::paginate(5);
        

        return view('admin.pages.salarystracture.list',compact('salarystractures'));

    }

    public function form(){
        $employees=Employee::all();

        
       return view('admin.pages.salarystracture.form',compact('employees'));

   
    }
    public function store(Request $request){
        //dd($request->all());
        salarystracture::create ([

            'name'=>$request->salary_name,
            'description'=>$request->salary_description,
            'amount'=>$request->salary_amount,
            'status'=>$request->salary_status,
            'type'=>$request->salary_type,


        ]);

        return redirect()->back();

    }
}
