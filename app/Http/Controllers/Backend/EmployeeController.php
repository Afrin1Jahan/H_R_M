<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Department;
use App\Models\Employee;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function employee(){
        // dd('hi');
        //  $employees=user::all();
        // $employees=user::all();
        // $departments = Department::all();
        $employees = User::where('role', '=', 'Employee')->get();
        // dd($employees->toarray());

         //with(['department','designation'])->get();
        
        return view("admin.pages.employee.list",compact('employees'));
    }

    public function form(){

        $departments= department::all();
        return view("admin.pages.employee.form",compact('departments'));
    }

    public function delete($id)
    {
      $employees=Employee::find($id);
      if($employees)
      {
        $employees->delete();
      }

      notify()->success('Deleted Successfully.');
      return redirect()->back();
    }


public function store(Request $request){



    $validate=validator::make($request->all(),[

        'Employee_Name'=>'required',
        'Employee_Email'=>'required',
      
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

    //  dd($request->all());

   
    User::create ([
     
        'name'=>$request->Employee_Name,
        'email'=>$request->Employee_Email,
        'role'=>$request->role,
        'password'=>bcrypt($request->user_password),
  
        'image'=>$fileName

    ]);
  
   Employee::create([
         'name'=>$request->Employee_Name,
        'email'=>$request->Employee_Email,
        'role'=>$request->role,
        'password'=>bcrypt($request->user_password),
        'Department'=>$request->Department,
        'Designation'=>$request->Designation,
        'image'=>$fileName
   ]);

    notify()->success('your data has been stored!');
    return redirect()->route('employee.name');
}
}
