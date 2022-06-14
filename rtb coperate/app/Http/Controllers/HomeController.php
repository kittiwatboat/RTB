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
use App\catagoryModel;
class HomeController extends Controller
{   
    public function index(){
        $ban=bannerModel::get();
        $icon=iconbanModel::get();
        $cata=catagoryModel::get();
        return view('fontend.index')->with('ban',$ban)->with('icon',$icon)->with('cata',$cata);
    }
    public function about(){
        return view('fontend.about');
    }
    public function product($id){
        $cata=catagoryMmodel::get();
        $cat=catagoryModel::find($id);
        return view('fontend.products01')->with('cat',$cat)->with('cata',$cata);
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
    public function solutionStep2($id){
        $solutiontype=solutiontypeModel::where('solutiontype_id',$id)->first();
        $solution=solution2Model::where('solutiontype_id',$id)->get();
        return view('fontend.solutionStep2',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ]);
    }
    public function solution_videoconference(){
        $solution=solution3Model::get();
        return view('fontend.solutionStep3',[
            'solution'=>$solution,
        ]);
    }
    public function solutionStep3($id){
        $solutiontype=solution2Model::where('solution2_id',$id)->first();
        $solution=solution3Model::where('solution2_id',$id)->get();
        return view('fontend.solutionStep3',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ]);
    }
    public function solution_personcal(){
        $solution=solution4Model::get();
        return view('fontend.solutionStep4',[
            'solution'=>$solution,
        ]);
    }
    public function solutionStep4($id){
        $solutiontype=solution3Model::where('solution3_id',$id)->first();
        $solution=solution4Model::where('solution3_id',$id)->get();
        return view('fontend.solutionStep4',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
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
