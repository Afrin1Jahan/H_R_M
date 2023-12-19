<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Search;

class HomeController extends Controller
{
    public function home (){
        return view('frontend.pages.home');
    }

    public function service(){
        return view("frontend.pages.service");
    }
    



    
}
