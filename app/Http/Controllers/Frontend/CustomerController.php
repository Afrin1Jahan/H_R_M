<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function registration(){

        return view('frontend.pages.registration');
    }


    public function store(Request $request)
    {
        // dd($request->all());

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
           'password'=>bcrypt($request->password),
        ]);

        notify()->success('Customer Registration successful.');
        return redirect()->back();
    }
public function login(){
    return view('frontend.pages.login');

}

Public function dologin(Request $request){
    $variable=Validator::make($request->all(),[

        'email'=>'required',
        'password'=>'required',

    ]);

    if($variable->fails()){
        notify()->error($variable->getMessageBag());
        return redirect()->back();
    }

    $credentials=$request->except('_token');

    if(auth()->attempt($credentials)){
        notify()->success('Login Success');
        return redirect()->route('home');
    }

    notify()->error('Invalid Credentials.');
    return redirect()->back();

}




}