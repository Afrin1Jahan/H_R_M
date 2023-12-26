<?php

namespace App\Http\Controllers\frontend;
use App\Models\Notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
 public function noticeshow(){
//  dd($notice);
$notice = Notice::all();

return view('frontend.pages.notice', compact('notice'));
 }




}
