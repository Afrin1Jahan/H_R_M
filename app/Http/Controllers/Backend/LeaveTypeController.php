<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
    public function leavetype(){
        return view("admin.pages.leavetype.leavetype");
    }
}
