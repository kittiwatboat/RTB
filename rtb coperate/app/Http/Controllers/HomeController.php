<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\bannerModel;
use App\iconbanModel;
class HomeController extends Controller
{   
    public function index(){
        $ban=bannerModel::get();
        return view('fontend.index')->with('ban',$ban);
    }
    public function about(){
        return view('fontend.about');
    }
    public function product(){
        return view('fontend.products01');
    }
    public function product_detail(){
        return view('fontend.products-detail');
    }
    public function solution(){
        return view('fontend.solution');
    }
    public function solution_meeting(){
        return view('fontend.solutionStep2');
    }
    public function solution_videoconference(){
        return view('fontend.solutionStep3');
    }
    public function solution_personcal(){
        return view('fontend.solutionStep4');
    }
    public function news(){
        return view('fontend.news');
    }
    public function newsdetail(){
        return view('fontend.newsDetail');
    }
    public function innovation(){
        return view('fontend.innovation');
    }
    public function innovationdetail(){
        return view('fontend.innovationDetail');
    }
    public function contact(){
        return view('fontend.contact');
    }
    
}
