<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setup;
use Illuminate\Http\Request;

class CompanysetupController extends Controller
{
    public function list(){

        $setups=Setup::all();
        return view("admin.pages.setup.list",compact('setups'));
    }

    public function form(){


        return view("admin.pages.setup.form");
    }
    public function store(Request $request){
        // dd($request->all());

        $fileName=null;
        if($request->hasFile('company_image'))
        {
            $file=$request->file('company_image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
           
            $file->storeAs('/uploads',$fileName);
    
        }



        Setup::create(
            [
                'name'=>$request-> company_name,
                'address'=>$request->company_address,
                'logo'=>$fileName,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'aboutus'=>$request->aboutus,
                
                
            ]
            );
            notify()->success('your data has been stored!');
            return redirect()->route('company.list');

    }
}
