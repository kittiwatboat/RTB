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
        $cata=catagoryModel::get();
        $cat=catagoryModel::find($id);
        return view('fontend.products01')->with('cat',$cat)->with('cata',$cata);
    }
    public function product_detail(){
        $cata=catagoryModel::get();

        return view('fontend.products-detail')->with('cata',$cata);
    }


    public function solution(){
        $cata=catagoryModel::get();

        $solution=solutiontypeModel::get();
        return view('fontend.solution',[
            'solution'=>$solution,
        ])->with('cata',$cata);
    }
    public function solution_meeting(){
        $cata=catagoryModel::get();

        $solution=solution2Model::get();
        return view('fontend.solutionStep2',[
            'solution'=>$solution,
        ])->with('cata',$cata);
    }
    public function solutionStep2($id){
        $cata=catagoryModel::get();

        $solutiontype=solutiontypeModel::where('solutiontype_id',$id)->first();
        if($solutiontype==null){
            $solutiontype->solutiontype_img=null;
        }
        $solution=solution2Model::where('solutiontype_id',$id)->get();
        return view('fontend.solutionStep2',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ])->with('cata',$cata);
    }
    public function solution_videoconference(){
        $cata=catagoryModel::get();

        $solution=solution3Model::get();
        return view('fontend.solutionStep3',[
            'solution'=>$solution,
        ])->with('cata',$cata);
    }
    public function solutionStep3($id){
        $cata=catagoryModel::get();

        $solutiontype=solution2Model::where('solution2_id',$id)->first();
        if($solutiontype==null){
            $solutiontype->solution2_img=null;
        }
        $solution=solution3Model::where('solution2_id',$id)->get();
        return view('fontend.solutionStep3',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ])->with('cata',$cata);
    }
    public function solution_personcal(){
        $cata=catagoryModel::get();

        $solution=solution4Model::get();
        return view('fontend.solutionStep4',[
            'solution'=>$solution,
        ])->with('cata',$cata);
    }
    public function solutionStep4($id){
        $cata=catagoryModel::get();

        $solutiontype=solution3Model::where('solution3_id',$id)->first();
        if($solutiontype==null){
            $solutiontype->solution3_img=null;
        }
        $solution=solution4Model::where('solution3_id',$id)->get();
        return view('fontend.solutionStep4',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ])->with('cata',$cata);
    }


    public function news(){
        $cata=catagoryModel::get();

        return view('fontend.news')->with('cata',$cata);
    }
    public function newsdetail(){
        $cata=catagoryModel::get();

        return view('fontend.newsDetail')->with('cata',$cata);
    }
    public function innovation(){
        $cata=catagoryModel::get();

        return view('fontend.innovation')->with('cata',$cata);
    }
    public function innovationdetail(){
        $cata=catagoryModel::get();

        return view('fontend.innovationDetail')->with('cata',$cata);
    }
    public function contact(){
        $cata=catagoryModel::get();

        return view('fontend.contact')->with('cata',$cata);
    }
    
}
