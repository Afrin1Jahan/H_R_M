<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalanderController extends Controller
{
    Public function calander(){
        return view("admin.pages.calander.calander");
    }
}
