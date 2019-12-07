<?php

namespace App\Http\Controllers;

use App\notice;
use Illuminate\Http\Request;
use App\User;

class NoticeController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(notice $notice)
    {
         
        $notice = notice::where('userid',  52)
            ->get();


        if(count($notice)>0)
        {
           // echo $notice->warning;
           // echo session()->get('userid');
            return view('customer-home.notice')->with('notice', $notice);
        }

        else {
            echo("no notice for u");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(notice $notice)
    {
        //
    }
}
