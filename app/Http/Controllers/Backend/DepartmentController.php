<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function list(){

        $departments=Department::paginate(5); 
       return view('admin.pages.department.list',compact('departments'));
    //    dd('habijabi');
    }

Public function view($id){
    $departments=Department::find($id);
    
    return view('admin.pages.department.view',compact('departments'));
}


    public function delete($id){

        $departments=Department::find($id);

        if($departments){
            $departments->delete($id);
            notify()->success('Deleted Successfully');
            return redirect()->back();
        }}


    public function edit($id){

        $departments=Department::find($id);

        return view('admin.pages.department.edit',compact('departments'));
        return redirect()->route('department.list');

   
    }

    public function update(Request $request,$id){

    $departments=Department::find($id);


if($departments){


    $departments->update(
        [
            'Name'=>$request->department_name,
            'Description'=>$request->description_name,
            'No'=>$request->department_no,
            'Location'=>$request->department_location,
            // 'employee_id'=>$request->employee_id
        ]
        );
        notify()->success('your data has been Updated!');
        return redirect()->back();

    
}

    }



    public function creatform(){
        return view('admin.pages.department.form');
    }

    public function store(Request $request){
          
        // dd($request->all());

      $validate= Validator::make($request->all(),[
        
        
       'department_name'=>'required',
       'department_no'=>'required',
       'department_location'=>'required',
        'description_name'=>'required'


      ]);


      if($validate->fails()){


        notify()->error($validate->getMessageBag());
        return redirect()->back();

    }
    //  dd($request-> all());

        Department::create(
            [
                'Name'=>$request->department_name,
                'Description'=>$request->description_name,
                'No'=>$request->department_no,
                'Location'=>$request->department_location,
                
                // 'employee_id'=>$request->employee_id
            ]
            );
            notify()->success('your data has been stored!');
            return redirect()->route('department.list');
            
    }
}
