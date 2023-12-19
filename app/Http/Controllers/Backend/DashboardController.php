<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $employees = Employee::count();
        $users = User::count();
        $departments = Department::count();

        return view("admin.pages.dashboard.dashboard",compact('employees','users','departments'));
    }
}
