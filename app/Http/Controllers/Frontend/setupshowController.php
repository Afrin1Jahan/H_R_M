<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setup;
use Illuminate\Http\Request;

class setupshowController extends Controller
{
    public function setupshow(){

        $setups= Setup::all();
        // dd($setups);
        return view('frontend.pages.setupshow',compact('setups'));
    }

    public function delete($id){

        $setups=Setup::find($id);

        if($setups){
            $setups->delete($id);
            notify()->success('Deleted Successfully');
            return redirect()->back();
        }}
}
