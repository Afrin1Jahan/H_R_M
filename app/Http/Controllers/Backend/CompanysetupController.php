<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CompanysetupController extends Controller
{
    public function setup(){
        return view("admin.pages.setup.setup");
    }
}
