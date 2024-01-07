<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Department;
use App\Models\Employee;
use App\Models\designation;
use App\Models\EmployeeLeaveBalance;
use App\Models\Leavetype;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function employee()
    {
        // dd('hi');
        //  $employees=user::all();
        // $employees=user::all();
        // $departments = Department::all();

        // $employees = User::where('role', '=', 'Employee')->get();
        $employees = Employee::with('departmentrel', 'designationrel')->get();
        //  dd($employees);

        // dd($employees->toarray());

        //with(['department','designation'])->get();

        //  $departments = Employee::with('reldepartment')->get();
        //  dd($departments);
        return view("admin.pages.employee.list", compact('employees'));
    }

    public function form()
    {
        $designations = designation::all();
        $departments = department::all();
        return view("admin.pages.employee.form", compact('departments', 'designations'));
    }

    public function balance($emp_id)
    {
        $balances = EmployeeLeaveBalance::where('user_id',$emp_id)->get();
        return view("admin.pages.employee.balance", compact('balances'));
    }


    public function edit($id)
    {
        $employees = Employee::find($id);
        return view("admin.pages.employee.edit", compact('employees'));
    }

    public function delete($id)
    {
        $employees = Employee::find($id);
        if ($employees) {
            $employees->delete();
        }

        notify()->success('Deleted Successfully.');
        return redirect()->back();
    }


    public function store(Request $request)
    {



        $validate = validator::make($request->all(), [

            'Employee_Name' => 'required',
            'Employee_Email' => 'required',


        ]);

        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate);
        }

        $types = Leavetype::all();
        if ($types->count() > 0) {


            $fileName = null;
            if ($request->hasFile('Employee_image')) {
                $file = $request->file('Employee_image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('/uploads', $fileName);
            }

            //  dd($request->all());


            $user = User::create([
                'name' => $request->Employee_Name,
                'email' => $request->Employee_Email,
                'role' => 'Employee',
                'password' => bcrypt($request->user_password),
                'image' => $fileName

            ]);

            $employee=Employee::create([
                'name' => $request->Employee_Name,
                'user_id' => $user->id,
                'email' => $request->Employee_Email,
                'role' => 'Employee',
                'password' => bcrypt($request->user_password),
                'Department' => $request->Department,
                'Designation' => $request->Designation,
                'image' => $fileName
            ]);

            //after creating employee create balance

            foreach ($types as $type) {
                EmployeeLeaveBalance::create([
                    'user_id' => $user->id,
                    'employee_id' => $employee->id,
                    'leave_type_id' => $type->id,
                    'balance' => $type->Balance,
                ]);
            }


            notify()->success('your data has been stored!');
            return redirect()->route('employee.name');
        }else{
            notify()->error('Please create leave types first.');
            return redirect()->route('employee.name');
        }
    }
}
