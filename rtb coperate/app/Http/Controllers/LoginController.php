<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function loginback(){
        return view('backend.login',[]);
    }
    public function loginf(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->status == "admin"){
            return redirect("backoffice");
            }else{
                return redirect(Session::get('lang')."/profile");
            }
        }else{
            return redirect("backoffice/login");
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();$request->session()->invalidate();
        return redirect("backoffice/login");
    }
}
