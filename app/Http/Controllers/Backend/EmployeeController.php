<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function employee(){


        $employees=Employee::with(['department','designation']);
     

        return view("admin.pages.employee.list",compact('employees'));
    }

    public function form(){

        $departments= department::all();
        return view("admin.pages.employee.form",compact('departments'));
    }


public function store(Request $request){



    $validate=validator::make($request->all(),[

        'Employee_Name'=>'required',
        'Employee_Email'=>'required',
        'Employee_phone'=>'required|numeric|min:5'
    ]);

    if($validate->fails()){

        return redirect()->back()->withErrors($validate);

    }

    $fileName=null;
    if($request->hasFile('Employee_image'))
    {
     $file=$request->file('Employee_image');
     $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
     $file->storeAs('/uploads',$fileName);
    }

    // dd($request->all());

   
    Employee::create ([
        'department'=>$request->department,
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
