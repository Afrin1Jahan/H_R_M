<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function list(){
        return view("admin.pages.attendence.list");
    }



public function form (){
    return view('admin.pages.attendence.form');
    }


}