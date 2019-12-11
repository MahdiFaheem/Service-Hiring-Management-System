<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
	function index(){
		return view('adminhome.index');
    }
    
    
	function serviceshow(){
        $user = User::where('type', '1')
					->get();
		return view('admin.serviceprovider')->with('users', $user);
    }
    function serviceinfo($id){
        $user = User::where('userid', $id)
					->get();
		return view('admin.providerinfo')->with('users', $user);
	}
}
