<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productstockModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\cartModel;
use DB;

class CartController extends Controller
{
    // public function cartadd(Request $request){
    //     $pro=productstockModel::first($request->ps_id);

    //     $amoutnew=$request->amout;
    //                 $sum=$product->price * $amoutnew;
    //                 $kg=$product->kg * $amoutnew;
    //                     // dd($kg);
    //                $orderDetails->amout=$amoutnew;
    //                $orderDetails->sum=$sum;
    //                $orderDetails->kgg=$kg;
    //                $orderDetails->save();
    //     return view('ecommerce.cart');
    // }


    public function cart_add(Request $r){
        $cart=new cartModel();
        $cart->id_user=$r->id_user;
        $cart->id_product=$r->id_product;
        $cart->save();

        return redirect()->back()->with('cart','Add Success!');
    }

    public function cart_minus(Request $r){
        $cart=cartModel::where('id_user',$r->id_user)->where('id_product',$r->id_product)->orderby('id','desc')->first();
      
        $cart->delete();

        return redirect()->back()->with('cart','Delete Success!');
    }

    public function cart_remove(Request $r){
        $cart=cartModel::where('id_user',$r->id_user)->where('id_product',$r->id_product)->orderby('id','desc')->delete();

        return redirect()->back()->with('cart','Remove Success!');
    }


    public function promotion_code(Request $r){
        $date=date('Y-m-d H:i:s');
        $po=DB::table('promotion')->where('code',$r->code)->whereDate('date_start','<=',$date)->whereDate('date_end','>=',$date)->first();
        if($r->code!=null or $r->code!=''){
        if($po!=null){
            $user=DB::table('user')->where('id',$r->id_user)->update(['pro2' => $po->id]);

            return redirect()->back()->with('code','Code Success!');
        }else{
           
            return redirect()->back()->with('code','Code Wrong!');
        }
        }else{
            $user=DB::table('user')->where('id',$r->id_user)->update(['pro2' => null]);

            return redirect()->back()->with('code','Remove Code!');
        }
    }


    public function promotion_add(Request $r){
        $date=date('Y-m-d H:i:s');
        $po=DB::table('promotion')->where('id',$r->id_promotion)->whereDate('date_start','<=',$date)->whereDate('date_end','>=',$date)->first();

        $user=DB::table('user')->where('pro1',$r->id_promotion)->first();

        if($user==null or $user==''){
        if($po!=null){
            $user=DB::table('user')->where('id',$r->id_user)->update(['pro1' => $po->id]);

            return redirect()->back()->with('code','Promotion Success!');
        }else{
           
            return redirect()->back()->with('code','Promotion Date End!');
        }
        }else{
            $user=DB::table('user')->where('id',$r->id_user)->update(['pro1' => null]);

            return redirect()->back()->with('code','Remove Promotion!');
        }
    }



}
