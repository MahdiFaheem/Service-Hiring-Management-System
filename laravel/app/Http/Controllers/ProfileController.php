<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
      function profile($id){

          $user = User::find($id);
             //echo($id);
                return view('profile.index')->with('user', $user);
            }

    
            function update(Request $request){

                $user = User::find(session()->get('userid'));
                return view('customer-home.updateprofile')->with('user', $user);
        
                }

                function updateProfile(Request $request){

                    $user = User::find(session()->get('userid'));
                    return view('customer-home.profile')->with('user', $user);
            
                    }
    
    function delete(){

        $user = User::find(session()->get('userid'));

        if($user->delete()){
            $deletedRows = $user::where('userid',session()->get('userid') )->delete();
            return redirect()->route('login.index');
        }else{
            return redirect()->route('profile.index',$id);
        }



    }

    function show(){

        $user = User::find(session()->get('userid'));
          // echo($id);
              return view('customer-home.profile')->with('user', $user);
          }



}
