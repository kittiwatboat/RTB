<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class HomeecomController extends Controller
{
    public function index(){

        return view('ecommerce.index');
    }
    public function cart(){
        return view('ecommerce.cart');
    }
    public function profile(){
        $user=Auth::user()->id;
        return view('ecommerce.profile')->with('user',$user);
    }
}
