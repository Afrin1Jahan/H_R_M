<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginFrom()
    {
        return view('admin.pages.login');
    }



Public function profile(){

    return view('admin.pages.backend profile.profile');

}


Public function profileedit(){
   
    return view('admin.pages.backend profile.edit');
}

public function profileupdate(Request $request){
    // dd($request->all());

    $validate= Validator::make($request->all(),[

       'name'=> 'required',
       'email'=>'required',
       'role'=>'required'
     ]);

     if($validate->fails()){
     notify()->error('please make it correct');
     return redirect()->back();
     } else{
   
 
      
    $user=user::find(auth()->user()->id);
    if($user){

$user->update([
 'name'=>$request->name,
 'role'=>$request->role,
 'email'=>$request->email

]);

notify()->success('updated successfully');
return redirect()->back();
 }

     
}}

    
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



    public function list(){

        

        $users= User::all();
        return view('admin.pages.users.list',compact('users'));
    }

public function createFrom(){


    return view('admin.pages.users.create');
}


public function store(Request $request){

    // dd($request);
    $validate=Validator::make($request->all(),[
        'user_name'=>'required',
        'role'=>'required',
        'user_email'=>'required|email',
        'user_password'=>'required|min:6',
    ]);


    if($validate->fails())
    {
        return redirect()->back()->with('myError',$validate->getMessageBag());
    }



    

    $fileName=null;
    if($request->hasFile('user_image'))
    {
        $file=$request->file('user_image');
        $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
       
        $file->storeAs('/uploads',$fileName);

    }


//  dd($request->all());

    User::create([
        'name'=>$request->user_name,
        'role'=>$request->role,
        'image'=>$fileName,
        'email'=>$request->user_email,
        'password'=>bcrypt($request->user_password),
    ]);

    return redirect()->back()->with('message','User created successfully.');



}


}
