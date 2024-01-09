<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Attendence;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendenceController extends Controller
{
    public function list()
    {
        $attendences = Attendence::paginate(10);
        return view("admin.pages.attendence.list", compact('attendences'));
    }


  


    public function checkin()
    {
        $existingAttendence = Attendence::where('employee_id', auth()->user()->id)
            ->WhereDate('select_date', now()->toDateString())
            ->first();

            if($existingAttendence){
                notify()->error('Attendence already given');
                return redirect()->back();
            }
            Attendence::create([
            'employee_id' => auth()->user()->id,
            'name'=>auth()->user()->name,
            'check_in' => now()->format('H:i:s'),
            'check_out' => null,
            'select_date' => now(),
         
        ]);
        return redirect()->back();
        notify()->success('Attendence given successfullly');
    }



    public function checkout()
    {
        $existingAttendence = Attendence::where('employee_id', auth()->user()->id)
        ->WhereDate('select_date', now()->toDateString())
        ->first();

        if($existingAttendence){

            if($existingAttendence->check_out !==null){
                notify()->error('you have already checked out for today.');
                return redirect()->back();
            }
            $mytime =Carbon::now();
            $totalDuration = $mytime->diffInSeconds($existingAttendence->check_in);
            $overTimeDiff = $mytime->diffInSeconds('17:00:00');

            $overTime =gmdate('H:i:s', $overTimeDiff);
            $dutyHour=gmdate('H:i:s', $totalDuration);

            $existingAttendence->update([
                'check_out'=>now()->format('H:i:s'),
                'dutyhour'=>$dutyHour,
                'overtime'=>$overTime,
            ]);
            
            return redirect()->back();

            $checkInTime = \Carbon\Carbon::createFromTimeString($existingAttendence->check_in);
            $checkOutTime = \Carbon\Carbon::createFromTimeString($existingAttendence->check_out);
            $duration = $checkOutTime->diff($checkInTime)->format('%H:%I:%S');
            $existingAttendence->update([
                'duration'=> $duration,
            ]);
        }
        
    }



    public function store(Request $request){
    //    dd($request->all());

        // $validate = Validator::make($request->all(), [


        //     'employee_id' => 'required',
        //     'in time' => 'required',
        // ]);


        // if ($validate->fails()) {
        //     return redirect()->back()->withErrors($validate);
        // }

            Attendence::create([


                'name'=>$request->name,
                'employee_id' => $request->employee_id,
                'check_in' => $request->in_time,
                'check_out' => $request->out_time,
                'select_date' => $request->date,
                


            ]);
            notify()->success('Attendence given successfully!');
            return redirect()->back();
        
    }
    public function report(){
        $attendences = Attendence::all();
        return view('admin.pages.attendence.report',compact('attendences'));
    }
 }
