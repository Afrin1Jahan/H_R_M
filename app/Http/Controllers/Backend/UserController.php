<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginFrom()
    {
        return view('admin.pages.login');
    }


    public function loginPost(Request $request)
    {


        $validate = Validator::make($request->all(), [

            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if($validate->fails()){

            return redirect()->back()->withErrors($validate);
        }



        $credentials=$request->except('_token');

        $login=auth()->attempt($credentials);
        if($login){
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('message','invalid user email or password');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
