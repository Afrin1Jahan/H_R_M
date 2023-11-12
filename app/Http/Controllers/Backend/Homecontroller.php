<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function Home(){
        return view("admin.pages.home.home");
    }
}
