<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(Request $request){

        if($request->session()->has('username')) {
            

            return view('customer-home.index');
        }

    }

    function notice(Request $request){

        return view('customer-home.notice');

    }
}
