<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class RegisterController extends Controller
{
    public function register(Request $request){
        // dd($request);
        if($request->email != $request->confirm_email){
            return redirect()->back()->with('err',1);
        }else{
            if($request->password != $request->confirm_password){
                return redirect()->back()->with('err',2);
            }else{
                $user = new userModel;
                $user->email=$request->email;
                $user->password=hash::make($request->password);
                $user->firstname=$request->firstname;
                $user->lastname=$request->lastname;
                $user->status=$request->status;
                $user->save();
                return redirect()->back()->with('success',1);
            }
        }
    }
}
