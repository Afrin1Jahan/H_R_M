<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list(){
        $users =User::all();
        return view("admin.pages.report.report",compact('users'));
    }

    public function reportview(){
$departments = Department::all();
return view("admin.pages.department.report",compact('departments'));
    }
}


