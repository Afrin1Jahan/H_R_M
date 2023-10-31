<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanysetupController extends Controller
{
    public function setup(){
        return view("admin.pages.setup.setup");
    }
}
