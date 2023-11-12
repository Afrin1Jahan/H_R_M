<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DesignationController extends Controller
{
    public function designation (){

        $designations= Designation::all();
        return view("admin.pages.designation.list",compact('designations'));
    }

   public function list(){
    return view("admin.pages.designation.form");
   }

public function store(Request $request){

    $validate= Validator::make($request->all(),[
       
       ' designation_title'=>'requied'


    ]);
    if($validate->fails()){
        return redirect()->back()->withErrors($validate);
    }

    // dd($request->all());
    
    Designation::create([

    
        'title'=>$request->designation_title,
        'description'=>$request->designation_description,
        'date'=>$request->designation_date,
        'status'=>$request->designation_status
    
    ]);
        
    notify()->success('your data has been stored!');
    return redirect()->back();

    
}


}
