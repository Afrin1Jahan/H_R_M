<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function attendence(){
        return view("admin.pages.attendence.attendence");
    }
}
