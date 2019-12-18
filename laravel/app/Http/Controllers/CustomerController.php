<?php

namespace App\Http\Controllers;
use App\User;
use App\Service;
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

    function serviceshow(){
        $user = User::where('type', '1')
					->get();
		return view('service.serviceprovider')->with('users', $user);
    }
    function serviceinfo($id){
        $user = User::where('userid', $id)
                    ->get();
        $service=Service::where('userid', $id)->first();
        //echo $service;
		return view('service.providerDetail')->with('users', $user)->with('service', $service);
    }
    

   
}
