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
    
    
	function profile(){
		$id = session()->get('userid');
		$user = User::where('userid' ,$id)
		->get();
		return view('admin.profile')->with('users', $user);
    }
  
	function edit()
	{
		$id = session()->get('userid');
		$user = User::where('userid', $id)
		->get();
		return view('admin.updateprofile')->with('users', $user);
	}
	function update(Request $request)
	{
		$request->validate([
			'username'=>'required',
			'email'=>'required',
			'gender'=>'required',
			'city'=>'required',
			'password'=>'required',
			'phone'=>'required'
			
		]);

		$user = User::find(session()->get('userid'));
		$user->username = $request->username;
		$user->email = $request->email;
		$user->phone = $request->phone;
		$user->password = $request->password;
		$user->gender = $request->gender;
		$user->city = $request->city;
		$user->save();
		return redirect()->route('adminhome.profile');
		
	}

}

