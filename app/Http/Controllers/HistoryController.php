<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\message;
use App\notice;
use App\feedback;
use App\Appointment;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
     
	function message(){
        $user = message::all();
		return view('history.message')->with('user', $user);
    }
     
	function feedback(){
        
            $user = feedback::all();
		return view('history.feedback')->with('user', $user);
    }
    function history(){
        
        $user = DB::table('appointment')
        ->join('user', 'appointment.cid', '=', 'user.userid')
        ->join('service', 'appointment.serviceid', '=', 'service.serviceid')
        ->select('appointment.*', 'user.username', 'service.servicename')
        ->get();
    return view('history.history')->with('user', $user);
}
function warning(){
    $user = DB::table('notice')
        ->join('user', 'notice.userid', '=', 'user.userid')
        ->select('notice.*', 'user.username')
        ->get();
    return view('history.warning')->with('user', $user);
}
}
