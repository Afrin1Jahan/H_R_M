<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function notice(){
        return view("admin.pages.notice.notice");
    }
}
