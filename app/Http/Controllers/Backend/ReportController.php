<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list(){
        $users =User::all();
        return view("admin.pages.report.report",compact('users'));
    }
}
