<?php

namespace App\Http\Controllers;
use App\User;
use App\Service;
use Illuminate\Support\Facades\DB;
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
        $url = route('customerservicepro.info', $row->userid);
       $output .= '
       <li><a href="'.$url.'">'.$row->username.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
}
    

   
}
