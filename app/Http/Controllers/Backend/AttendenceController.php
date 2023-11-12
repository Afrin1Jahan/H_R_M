<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function attendence(){
        return view("admin.pages.attendence.attendence");
    }
}
