<?php

namespace App\Http\Controllers;
use App\User;
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
		return view('service.providerDetail')->with('users', $user);
    }
    

   
}
