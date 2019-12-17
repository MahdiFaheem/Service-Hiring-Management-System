<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\customer;
use App\notice;
use App\message;
use Illuminate\Support\Facades\DB;

class AdminCustomerController extends Controller
{
    
	function customershow(){
        $user = User::where('type', '2')
					->get();
		return view('admin.customer')->with('users', $user);
    }
    function customerinfo($id){
        $user = User::where('userid', $id)
					->get();
	    $location = customer::where('userid', $id)
					->get();
		return view('admin.customerinfo')->with('users', $user)->with('locations', $location);
	}
	
    
    function customerwarn($id)
	{
		$user = User::where('userid', $id)
		->get();
		return view('admin.warning')->with('users', $user);
    }
    function customerwarning(Request $request, $id)
	{
        $adminid = session()->get('userid');
        $request->validate([
            'warning'=>'required'
        ]);
        $user = new notice();
        $user->adminid = $adminid;
        $user->userid = $id;
        $user->warning = $request->warning;
        $user->save();
		return redirect()->route('admincustomer.info', $id);
    }
    
  
    function customerdelete($id)
	{
         $user = User::find($id);

        if($user->delete()){
            $deletedRows = $user::where('userid', $id )->delete();
            return redirect()->route('adminhome.customershow');
        }else{
            return redirect()->route('admincustomer.info',$id);
        }
    }

}
