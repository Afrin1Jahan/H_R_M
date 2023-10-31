<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function notice(){
        return view("admin.pages.notice.notice");
    }
}
