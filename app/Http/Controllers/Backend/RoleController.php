<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role(){
        return view('admin.pages.role.role');
    }
}
