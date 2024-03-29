<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Salarystracture;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalarystractureController extends Controller
{
    public function list(){


        // $salarystractures= salarystracture::all();
        // $salarystractures= salarystracture::paginate(5);
        
          $salarystracturess = Salarystracture::with('relDesignation')->get();
        //   dd($salarystracturess );
        return view('admin.pages.salarystracture.list',compact('salarystracturess'));

    }

    public function form(){
        $departments= Department::all();
        $designations = Designation::all();
        $employees=Employee::all();

       
       return view('admin.pages.salarystracture.form',compact('employees','designations','departments'));

   
    }


    public function edit($id){

        $salarystracturess= Salarystracture::find($id);

        return view('admin.pages.salarystracture.edit',compact('salarystracturess'));
        return redirect()->route('salary.list');

   
    }

    public function update(Request $request,$id){

        $salarystracturess=Salarystracture::find($id);
    
    
    if($salarystracturess){
    
    
        $salarystracturess->update(
            [
              
                'Title'=>$request->title,
                'Basic'=>$request->basic,
                'HouseAllownce'=>$request->houseallowance,
                'MedicalAllowance'=>$request->transportallowance,
                'TransportAllowance'=>$request->medicalallowance,
                'total'=>$request->basic+$request->houseallowance+$request->transportallowance+$request->medicalallowance

                // 'employee_id'=>$request->employee_id
            ]
            );
            notify()->success('your data has been Updated!');
            return redirect()->back();
    
        
    }
    
        }


    public function store(Request $request){
    //   dd($request->all());

        salarystracture::create ([
        'DesignationType'=>$request->DesignationType,
         'Title'=>$request->title,
         'Basic'=>$request->basic,
         'HouseAllownce'=>$request->houseallowance,
         'MedicalAllowance'=>$request->transportallowance,
         'TransportAllowance'=>$request->medicalallowance,
         'total'=>$request->basic+$request->houseallowance+$request->transportallowance+$request->medicalallowance
        ]);

        notify()->success('your data has been stored!');

        return redirect()->route('salary.list');

    }

    public function report(){
        $salarystracturess= Salarystracture::all();
        return view('admin.pages.salarystracture.report',compact('salarystracturess'));
    }
}
