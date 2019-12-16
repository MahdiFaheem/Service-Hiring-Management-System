<?php

namespace App\Http\Controllers;

use App\feedback;
use App\Service;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store($id,Request $request)
    {
        $request->validate([
            
            'message'=>'required'
            
        ]);
        $service=Service::where('serviceid', $id)->first();
        $feedback=new feedback();
        $feedback->sender=session()->get('userid');
        $feedback->receiver=$service->userid;
        $feedback->feedback=$request->message;
        $feedback->save();
        return redirect()->route('customer-home.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(feedback $feedback)
    {
        $feedback = feedback::where('receiver',  session()->get('userid'))
        ->get();



        if(count($feedback)>0)
        {
    
            return view('feedback.feedback')->with('feedback', $feedback);
        }

        else {
        echo("no feedback request for you");
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(feedback $feedback)
    {
        //
    }

    public function servicefeedback($id)
    {
        $feedback = feedback::where('receiver', $id)
        ->get();



        if(count($feedback)>0)
        {
    
            return view('feedback.feedback')->with('feedback', $feedback);
        }

        else {
        echo("no feedback request for you");
        }

    }

    public function givefeedback($id)
    {
        return view('feedback.givefeedback');

    }
   
}
