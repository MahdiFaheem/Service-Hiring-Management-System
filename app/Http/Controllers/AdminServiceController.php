<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\notice;
use App\message;
use Illuminate\Support\Facades\DB;

class AdminServiceController extends Controller
{
    
	function serviceshow(){
        $user = User::where('type', '1')
					->get();
		return view('admin.serviceprovider')->with('users', $user);
    }
    function serviceinfo($id){
        $user = User::where('userid', $id)
					->get();
	    $skill = Service::where('userid', $id)
					->get();
		return view('admin.providerinfo')->with('users', $user)->with('skills', $skill);
	}
	function serviceedit($id)
	{
		$user = User::where('userid', $id)
		->get();
  		$skill = Service::where('userid', $id)
		->get();
		return view('admin.providerupdate')->with('users', $user)->with('skills', $skill);
	}
	function serviceupdate(Request $request, $id)
	{
		Service::where('userid', $id)->update(['servicename' => $request->skill]);
		return redirect()->route('servicepro.info', $id);
    }
    
    function servicewarn($id)
	{
		$user = User::where('userid', $id)
		->get();
		return view('admin.warning')->with('users', $user);
    }
    function servicewarning(Request $request, $id)
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
		return redirect()->route('servicepro.info', $id);
    }
    
    function servicemessage($id)
	{
		$user = User::where('userid', $id)
		->get();
		return view('admin.message')->with('users', $user);
    }
    function servicesend(Request $request, $id)
	{
        $adminid = session()->get('userid');
        $request->validate([
            'message'=>'required'
        ]);
        $user = new message();
        $user->senderid = $adminid;
        $user->receiverid = $id;
        $user->message = $request->message;
        $user->save();
		return redirect()->route('servicepro.info', $id);
    }
    function servicedelete($id)
	{
         $user = User::find($id);

        if($user->delete()){
            $deletedRows = $user::where('userid', $id )->delete();
            return redirect()->route('adminhome.serviceshow');
        }else{
            return redirect()->route('servicepro.info',$id);
        }
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('user')
        ->where('username', 'LIKE', "%{$query}%")
        ->where('type' , 1)
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
        $url = route('servicepro.info', $row->userid);
       $output .= '
       <li><a href="'.$url.'">'.$row->username.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
}
}