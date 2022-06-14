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
        $cata=catagoryModel::get();

        return view('fontend.about')->with('cata',$cata);
    }
    public function product($id){
        $cata=catagoryMmodel::get();
        $cat=catagoryModel::find($id);
        return view('fontend.products01')->with('cat',$cat)->with('cata',$cata)->with('cata',$cata);
    }
    public function product_detail(){
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
        $solution=solution2Model::get();
        $cata=catagoryModel::get();

        return view('fontend.solutionStep2',[
            'solution'=>$solution,
        ])->with('cata',$cata);
    }
    public function solutionStep2($id){
<<<<<<< HEAD
        $cata=catagoryModel::get();

        $solution=solution2Model::where('solutiontype_id',$id)->get();
        return view('fontend.solutionStep2',[
            'solution'=>$solution,
        ])->with('cata',$cata);
=======
        $solutiontype=solutiontypeModel::find($id);
        $solution=solution2Model::where('solutiontype_id',$id)->get();
        return view('fontend.solutionStep2',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ]);
>>>>>>> 22193c950fac4c2fb893775d28f3335a52b3d506
    }
    public function solution_videoconference(){
        $cata=catagoryModel::get();

        $solution=solution3Model::get();
        return view('fontend.solutionStep3',[
            'solution'=>$solution,
        ])->with('cata',$cata);
    }
    public function solutionStep3($id){
<<<<<<< HEAD
        $cata=catagoryModel::get();

        $solution=solution3Model::where('solution2_id',$id)->get();
        return view('fontend.solutionStep3',[
            'solution'=>$solution,
        ])->with('cata',$cata);
=======
        $solutiontype=solution2Model::find($id);
        $solution=solution3Model::where('solution2_id',$id)->get();
        return view('fontend.solutionStep3',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ]);
>>>>>>> 22193c950fac4c2fb893775d28f3335a52b3d506
    }
    public function solution_personcal(){
        $solution=solution4Model::get();
        $cata=catagoryModel::get();

        return view('fontend.solutionStep4',[
            'solution'=>$solution,
        ])->with('cata',$cata);
    }
    public function solutionStep4($id){
<<<<<<< HEAD
        $cata=catagoryModel::get();

        $solution=solution4Model::where('solution3_id',$id)->get();
        return view('fontend.solutionStep4',[
            'solution'=>$solution,
        ])->with('cata',$cata);
=======
        $solutiontype=solution3Model::find($id);
        $solution=solution4Model::where('solution3_id',$id)->get();
        return view('fontend.solutionStep4',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ]);
>>>>>>> 22193c950fac4c2fb893775d28f3335a52b3d506
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
