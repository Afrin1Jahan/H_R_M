<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee(){


        $employees=Employee::all();
     

        return view("admin.pages.employee.list",compact('employees'));
    }

    public function form(){
        return view("admin.pages.employee.form");
    }

public function store(Request $request){
    // dd($request-> all());
    Employee::create ([
        'name'=>$request->Employee_Name,
        'email'=>$request->Employee_Email,
        'phone' =>$request->Employee_phone,
        'shift'=>$request->Employee_shift,
        'dob'=>$request->Employee_dob,
        'gender'=>$request->Employee_gender,
        'image'=>$request->Employee_image

    ]);
   

    notify()->success('your data has been stored!');
    return redirect()->back();
}
}
