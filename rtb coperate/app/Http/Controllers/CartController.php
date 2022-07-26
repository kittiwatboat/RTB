<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productstockModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
    public function cartadd(Request $request){
        $pro=productstockModel::first($request->ps_id);

        $amoutnew=$request->amout;
                    $sum=$product->price * $amoutnew;
                    $kg=$product->kg * $amoutnew;
                        // dd($kg);
                   $orderDetails->amout=$amoutnew;
                   $orderDetails->sum=$sum;
                   $orderDetails->kgg=$kg;
                   $orderDetails->save();
        return view('ecommerce.cart');
    }
}
