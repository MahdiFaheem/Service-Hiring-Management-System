<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
//use App\Http\Requests\RegRequest;
use Validator;


class RegisterController extends Controller
{
    function index(Request $request){
    return view('register.register');
    }

    function store(Request $request){
         $request->validate([
            'phone'=>'unique:user,phone',
            'email'=>'unique:user,email'
        ]);
       // if($validation->fails()){
         
          //  return back()->with('errors', $validation->errors())->withInput();
           
       // }
       
        $user = new User();
        $user->username = $request->username;
        $user->password =$request->password;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->city =$request->city;
        $user->gender =$request->gender;
        $user->type =1;
        $user->save();

        $sv = User::where('phone', $request->phone)
        ->first();
        DB::table('service')->insert(
            ['spid' => $sv->userid,'userid' => $sv->userid,'servicename' => $request->skill, 'price' => $request->price, 'description' => $request->description]
        );
        
        return redirect()->route('login.index');
       
        }

        function storecus(Request $request){
            $request->validate([
                'phone'=>'unique:user,phone',
                'email'=>'unique:user,email'
            ]);
            if($validation->fails()){
           
                return back()->with('errors', $validation->errors())->withInput();
               
            }
            $user = new User();
            $user->username = $request->username;
            $user->password =$request->password;
            $user->email =$request->email;
            $user->phone =$request->phone;
            $user->city =$request->city;
            $user->gender =$request->gender;
            $user->type =2;
            $user->save();
    
            $sv = User::where('phone', $request->phone)
            ->first();
            DB::table('customer')->insert(
                ['userid' => $sv->userid,'location' => $request->location]
            );
            
            return redirect()->route('login.index');
           
            }
        
}
