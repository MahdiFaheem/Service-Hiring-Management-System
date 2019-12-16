<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use App\Service;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $service= Service::where('userid', $id)->first();
       // echo $service;
       return view('appointment.index')->with('service', $service);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'serviceid'=>'required',
            'city'=>'required',
            'time'=>'required',
            'price'=>'required'
            
            
        ]);

        $appointment=new Appointment();
        $appointment->cid=session()->get('userid');
        $appointment->serviceid=$request->serviceid;
        $appointment->location=$request->city;
        $appointment->time=$request->time;
        $appointment->amount=$request->price;
        $appointment->request=0;
        $appointment->complete=0;
        $appointment->pay=0;
        $appointment->save();
        return redirect()->route('customer-home.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function delete(Appointment $appointment)
    {
        $appointment= Appointment::where('cid', session()->get('userid'));
        $appointment->delete();
        return redirect()->route('customer-home.index');
    }


    public function requested(Appointment $appointment)
    {
        $appointment = Appointment::where('cid',  session()->get('userid'))->where('request' ,0)->where('pay' ,0)->where('complete' ,0)
        ->get();



        if(count($appointment)>0)
        {
            //echo $appointment[0];
            return view('appointment.requested')->with('appointment', $appointment);
        }

        else {
        echo("no requested appointments for you");
        }

    }

    public function upcomming(Appointment $appointment)
    {
        $appointment = Appointment::where('cid',  session()->get('userid'))->where('request' ,1)->where('pay' ,0)->where('complete' ,0)
        ->get();



        if(count($appointment)>0)
        {
            //echo $appointment[0];
            return view('appointment.upcomming')->with('appointment', $appointment);
        }

        else {
        echo("no requested appointments for you");
        }

    }
    public function completed(Appointment $appointment)
    {
        $appointment = Appointment::where('cid',  session()->get('userid'))->where('request' ,1)->where('pay' ,1)->where('complete' ,1)
        ->get();



        if(count($appointment)>0)
        {
            //echo $appointment[0];
            return view('appointment.completed')->with('appointment', $appointment);
        }

        else {
        echo("no requested appointments for you");
        }

    }

    public function pay(Appointment $appointment)
    {
        $appointment = Appointment::where('cid',  session()->get('userid'))
        ->first();
        $appointment->pay=1;
        $appointment->complete=1;
        $appointment->save();
        return redirect()->route('customer-home.index');


    }
}
