<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function list(){

        $notice = Notice::all();

        return view("admin.pages.notice.list",compact('notice'));
    }

    public function form(){

        return view("admin.pages.notice.form");
    }

    public function store(Request $request){

      Notice::create([

        'title'=>$request->title,
        'date'=>$request->date

      ]);
      return redirect()->route('notice.list');
      notify()->success('Notice successfullly done');


    }


    Public function search(Request $request){
      if($request->search){

        $notice= Notice::Where('title','LIKE','%'.$request->search.'%')->get();
      }
     else{
      $notice=Notice::all();
  }

      return view("frontend.pages.search",compact('notice'));
    }
}
