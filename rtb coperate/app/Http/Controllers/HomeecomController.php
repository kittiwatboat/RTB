<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\producttypeModel;
use App\productstockModel;
use App\subcatagoryModel;
use App\catagoryModel;
class HomeecomController extends Controller
{
    public function index(){
        $cata=catagoryModel::get();
        $protype=producttypeModel::get();
        $sub=subcatagoryModel::get();

        return view('ecommerce.index')->with('sub',$sub)->with('cata',$cata)->with('protype',$protype);
    }
    public function cart(){
        $protype=producttypeModel::get();
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();

        return view('ecommerce.cart')->with('sub',$sub)->with('cata',$cata)->with('protype',$protype);
    }
    public function profile(){
        $user=Auth::user()->id;
        $cata=catagoryModel::get();
        $protype=producttypeModel::get();
        $sub=subcatagoryModel::get();

        return view('ecommerce.profile')->with('user',$user)->with('sub',$sub)->with('cata',$cata)->with('protype',$protype);
    }
    public function product($id){
        $cata=catagoryModel::get();
        $cat=catagoryModel::find($id);
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('ecommerce.products01')->with('cat',$cat)->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
}
