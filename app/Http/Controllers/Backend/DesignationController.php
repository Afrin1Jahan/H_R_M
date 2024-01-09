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

   public function form(){
      $departments = Department::all();
    return view("admin.pages.designation.form",compact('departments'));
   }




   public function edit($id){

    $designations=Designation::find($id);

    return view('admin.pages.designation.edit',compact('designations'));
    return redirect()->route('designations.list');


}

public function updated(Request $request,$id){

    $designations=Designation::find($id);


if($designations){


    $designations->update(
    [
        'title'=>$request->designation_title,
        'description'=>$request->designation_description,

        // 'date'=>$request->designation_date,
        // 'employee_id'=>$request->employee_id
    ]
    );
    notify()->success('your data has been Updated!');
    return redirect()->back();


}

}

public function delete($id){

    $designations=Designation::find($id);

    if( $designations){
        $designations->delete($id);
        notify()->success('Deleted Successfully');
        return redirect()->back();
    }}

















public function store(Request $request){

    $validate= Validator::make($request->all(),[
       
       ' designation_title'=>'requied',
       'designation_description'=>'required',
       'department'=>'required',
    //    'designation_date'=>'required'


    ]);
    if($validate->fails()){
        return redirect()->back()->withErrors($validate);
    }

    //  dd($request->all());
    
    Designation::create([

    
        'title'=>$request->designation_title,
        'description'=>$request->designation_description,
        'department'=>$request->department,
        // 'date'=>$request->designation_date,
   
       
    
    ]);
        
    notify()->success('your data has been stored!');
    return redirect()->route('des');

    
}

public function reportview(){
    $designations = Designation::all();
    return view('admin.pages.designation.report',compact('designations'));
}


}
