<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function list(){

        $departments=Department::all();
       return view('admin.pages.department.list',compact('departments'));
    //    dd('habijabi');
    }



    public function creatform(){
        return view('admin.pages.department.form');
    }

    public function store(Request $request){
        // dd($request-> all());

        Department::create(
            [
                'name'=>$request->department_name,
                'description'=>$request->inputtextarea,
                'no'=>$request->department_no,
                'location'=>$request->department_location
            ]
            );
            return redirect()->back();
    
    }
}
