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



    public function creatform(){
        return view('admin.pages.department.form');
    }

    public function store(Request $request){


      $validate= Validator::make($request->all(),[
        
        
       'department_name'=>'required',
       'department_no'=>'required'


      ]);


      if($validate->fails()){


        // notify()->error($validate->getMessageBag());
        return redirect()->back()->withErrors($validate);

    }
        // dd($request-> all());

        Department::create(
            [
                'name'=>$request->department_name,
                'description'=>$request->inputtextarea,
                'no'=>$request->department_no,
                'location'=>$request->department_location
            ]
            );
            notify()->success('your data has been stored!');
            return redirect()->back();
    
    }
}
