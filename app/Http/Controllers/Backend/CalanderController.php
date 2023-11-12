<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class CalanderController extends Controller
{
    Public function calander(){
        return view("admin.pages.calander.calander");
    }
}
