<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      


        $message = message::where('receiverid',  session()->get('userid'))->get();
        
        if(count($message)>0)
        {
           // echo $message;
            return view('customer-home.message')->with('message', $message[0]);
        }

        else {
            echo("no message request for you");
        }
      
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'sender'=>'required',
            'message'=>'required',
            'reply'=>'required'
            
        ]);
        $message = message::where('receiverid',  session()->get('userid'))->where('senderid', $request->sender)->get();
        $message[0]->senderid =session()->get('userid');
       $message[0]->receiverid = $request->sender;
        $message[0]->message = $request->reply;
        $message[0]->save();
     // echo $message;
    // echo $request->sender.'<br>';
    // echo $request->message.'<br>';
       
       return redirect()->route('customer-home.index');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        //
    }
}
