<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){
		
		//$users = User::all();
		$user = User::where('username', $request->username)
					->where('password', $request->password)
					->get();

		//$users = DB::table('users')->get();
	/*	$user = DB::table('users')->where('username', $request->username)
					->where('password', $request->password)
					->get();*/

		if($user[0]->type == 4){
			$request->session()->put('uname', $request->input('username'));
			$request->session()->put('userid', $user[0]->userid);
			//$request->session()->put('user', $user->type);
			//$request->session()->put('user', $user);

			return redirect()->route('adminhome.index');
		}else{

			$request->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect()->route('login.index');
		}
	}
}


