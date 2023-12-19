<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Leavetype;

use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
   
    public function list(){

        // dd('hi');
        $leavetypes = Leavetype::all();
        return view("admin.pages.leavetype.list",compact('leavetypes')); 
    }


    public function form(){
        

        return view("admin.pages.leavetype.form");
    }

    public function store(Request $request){

        Leavetype::create([
         
            
            'leavetype'=>$request->leave_type,
            'balance'=>$request->balance,
            'description'=>$request->description_name,
           
            'status'=>$request->status_name

        ]);
        return redirect()->route('leavetype.list');
        notify()->success('leave application successfullly done');


    }
}
