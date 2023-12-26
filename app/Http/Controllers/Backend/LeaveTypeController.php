<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Leavetype;

use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{

    public function list()
    {

        // dd('hi');
        $leavetypes = Leavetype::all();
        return view("admin.pages.leavetype.list", compact('leavetypes'));
    }


    public function form()
    {


        return view("admin.pages.leavetype.form");
    }

    public function edit($id)
    {

        $leavetypes = Leavetype::find($id);
        return view("admin.pages.leavetype.edit", compact('leavetypes'));
    }

    public function delete($id)
    {

        $leavetypes = Leavetype::find($id);
        if ($leavetypes) {
            $leavetypes->delete($id);
            notify()->success('Deleted Successfully');
            return redirect()->back();
        }
    }


    public function store(Request $request)
    {

        Leavetype::create([


            'Leavetype' => $request->leave_type,
            'Balance' => $request->balance,
            'Description' => $request->description_name,

            'Action' => $request->status_name

        ]);
        return redirect()->route('leavetype.list');
        notify()->success('leave application successfullly done');
    }
}
