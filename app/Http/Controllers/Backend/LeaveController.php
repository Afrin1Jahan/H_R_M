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
use App\Models\EmployeeLeaveBalance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeaveController extends Controller
{

  public function manage()
  {
    return view('admin.pages.leave.list');
  }

  public function list()
  {
    $employees = User::where('role', '=', 'Employee')->get();

    $leaves = Leave::with('relLeavetype')->paginate('5');
    // dd($leave->toarray());
    // $departments = Department::all();


    return view('admin.pages.leave.list', compact(['employees', 'leaves']));
  }

  public function form()
  {

    //$employees=Employee::all();


    $leavetypes = Leavetype::all();

    return view('admin.pages.leave.form', compact('leavetypes'));
  }

  public function approve(Request $request, $id)
  {

    $request = Leave::find($id);
    //   dd($request);

    if ($request) {

      $request->Update([
        'status' => 'Approved'
      ]);
    

      $leave=EmployeeLeaveBalance::where('user_id',$request->user_id)->where('leave_type_id',$request->leavetype_id)
              ->first();
              
              $leave->decrement('balance',$request->no_of_days);

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


  public  function reject(Request $request, $id)
  {

    $request = Leave::find($id);
    //   dd($request);

    if ($request) {

      $request->Update([

        'status' => 'Reject'
      ]);
      notify()->success('your application is Reject!');
      return redirect()->back();
    }
  }

  public function store(Request $request)
  {

    $validate = Validator::make(
      $request->all(),
      [
        'start_date' => 'required|date',
        'end_date' => 'required|after:start_date',
      ]
    );

    if ($validate->fails()) {
      // dd($validate->getMessageBag());
      notify()->error($validate->getMessageBag());
      return redirect()->back();
    }
    $date1 = Carbon::parse($request->start_date);  // Replace this with your first date
    $date2 = Carbon::parse($request->end_date);  // Replace this with your second date
    
    $diffInDays = $date1->diffInDays($date2);
    

   //check user has available balance or not
   $checkBalance=EmployeeLeaveBalance::where('user_id',auth()->user()->id)
                  ->where('leave_type_id',$request->leavetype_id)->first();
    
    if($checkBalance && $checkBalance->balance >= $diffInDays)
    {
      $leaves = Leave::create([
        'leavetype_id' => $request->leavetype_id,
        'user_id' =>auth()->user()->id,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'no_of_days' =>$diffInDays,
        'emergency_contact' => $request->emergency_contact,
        'reason_for_leave' => $request->reason_for_leave,
  
      ]);
   
      notify()->success('leave create successfullly');
      return redirect()->route('leave.list');
    }else
    {
      notify()->error('Insufficiant Leave Balance');
      return redirect()->back();
    }
    
  }
}
