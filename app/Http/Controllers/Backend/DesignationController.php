<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DesignationController extends Controller
{
    public function designation (){
        // dd('hi');
        $designations= Designation::with('departmentRel')->get();
      
        // dd($designations);
        return view("admin.pages.designation.list",compact('designations'));
    }

   public function list(){
      $departments = Department::all();
    return view("admin.pages.designation.form",compact('departments'));
   }

public function store(Request $request){

    $validate= Validator::make($request->all(),[
       
       ' designation_title'=>'requied'


    ]);
    if($validate->fails()){
        return redirect()->back()->withErrors($validate);
    }

    //  dd($request->all());
    
    Designation::create([

    
        'title'=>$request->designation_title,
        'description'=>$request->designation_description,
        'department'=>$request->department,
        'date'=>$request->designation_date,
   
       
    
    ]);
        
    notify()->success('your data has been stored!');
    return redirect()->route('des');

    
}


}
