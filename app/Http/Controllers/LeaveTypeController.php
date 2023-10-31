<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
    public function leavetype(){
        return view("admin.pages.leavetype.leavetype");
    }
}
