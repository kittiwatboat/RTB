<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\bannerModel;
use App\iconbanModel;

use App\solutiontypeModel;
use App\solution2Model;
use App\solution3Model;
use App\solution4Model;
use App\solution5Model;
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
        $solution=solutiontypeModel::get();
        return view('fontend.solution',[
            'solution'=>$solution,
        ]);
    }
    public function solution_meeting(){
        $solution=solution2Model::get();
        return view('fontend.solutionStep2',[
            'solution'=>$solution,
        ]);
    }
    public function solution_videoconference(){
        $solution=solution3Model::get();
        return view('fontend.solutionStep3',[
            'solution'=>$solution,
        ]);
    }
    public function solution_personcal(){
        $solution=solution4Model::get();
        return view('fontend.solutionStep4',[
            'solution'=>$solution,
        ]);
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
