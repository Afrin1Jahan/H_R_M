<?php

namespace App\Http\Controllers\Backend;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Rules\DateRange;

use App\Http\Controllers\Controller;
use App\Models\Leave;
use App\Models\Leavetype;
use App\Models\Department;
use Illuminate\Http\Request;

class LeaveController extends Controller
{

public function manage(){
  return view('admin.pages.leave.list');
}

    public function list (){
        $employees = User::where('role', '=', 'Employee')->get();

        $leaves = Leave::with('relLeavetype')->paginate('5');
        // dd($leave->toarray());
        // $departments = Department::all();
      

        return view('admin.pages.leave.list',compact(['employees', 'leaves']));
    }

    public function form(){

        //$employees=Employee::all();
    

        $leavetypes = Leavetype::all();
       
        return view('admin.pages.leave.form',compact('leavetypes'));
    }

    public function approve(Request $request, $id){




        $request = Leave::find($id);
        //   dd($request);
        
          if( $request){
        
            $request->Update([
                  
                'status'=>'Approved'
            ]);
            notify()->success('your application is Approved!');
            return redirect()->back();
          }



       
        // $approve = Leave::find($id);
        // if ( $approve) {
        //     notify()->success('Approved');
        //     return redirect()->back();
        // }
        // else{ 
    
        //     notify()->Error(' Not Approved');
        //     return redirect()->back();
        // }

  
       
    
}


public  function reject(Request $request, $id){

    $request = Leave::find($id);
        //   dd($request);
        
          if( $request){
        
            $request->Update([
                  
                'status'=>'Reject'
            ]);
            notify()->success('your application is Reject!');
            return redirect()->back();
          }

}


        
    

    public function store(Request $request){


      $validate= Validator::make($request->all(),
      [
        'start_date' => 'required|date',
        'end_date' => ['required', 'date' ],
      ]);

      if($validate->fails())
      {
          // dd($validate->getMessageBag());
          return redirect()->back();
      }


       // dd($request->all());
         $leaves = Leave::create([

            'leavetype'=>$request->leave_type,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'emergency_contact'=>$request->emergency_contact,
            'reason_for_leave'=>$request->reason_for_leave,
            'status'=>'pending',
            'action'=>$request->action,

        ]);
        // dd($data);
        return redirect()->route('leave.list');
        notify()->success('leave create successfullly');

    }
}
