<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function payroll(){
        return view("admin.pages.payroll.payroll");

    }



    public function list(){
        return view("admin.pages.payroll.list");
    }


    public function store(Request $request){
        // return("$request");
    }
}
