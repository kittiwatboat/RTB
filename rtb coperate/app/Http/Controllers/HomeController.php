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
use App\subcatagoryModel;
use App\producttypeModel;

use App\partnerModel;
use App\meet_headModel;
use App\meet_bodyModel;
use App\visionModel;

use App\workModel;
use App\innovationModel;
use App\newsModel;


class HomeController extends Controller
{   
    public function index(){
        $ban=bannerModel::get();
        $icon=iconbanModel::get();
        $cata=catagoryModel::get();

        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();
        return view('fontend.index')->with('ban',$ban)->with('icon',$icon)->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function about(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();



        $vision=visionModel::first();
        $partner=partnerModel::first();
        $meet_head=meet_headModel::first();
        $meet_body=meet_bodyModel::get();

        $work=workModel::get();

        return view('fontend.about')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('vision',$vision)->with('partner',$partner)->with('meet_head',$meet_head)->with('meet_body',$meet_body)
        ->with('work',$work);
    }
    public function product($id){
        $cata=catagoryModel::get();
        $cat=catagoryModel::find($id);
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('fontend.products01')->with('cat',$cat)->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function product_detail(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('fontend.products-detail')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }


    public function solution(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $solution=solutiontypeModel::get();
        return view('fontend.solution',[
            'solution'=>$solution,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function solution_meeting(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $solution=solution2Model::get();
        return view('fontend.solutionStep2',[
            'solution'=>$solution,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function solutionStep2($id){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $solutiontype=solutiontypeModel::where('solutiontype_id',$id)->first();
        if($solutiontype==null){
            $solutiontype->solutiontype_img=null;
        }
        $solution=solution2Model::where('solutiontype_id',$id)->get();

        if($solutiontype->step=='1'){
            $item=solution5Model::where('solution4_id',$id)->get();
        }else{
            $item=null;
        }
        return view('fontend.solutionStep2',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)->with('item',$item);
    }
    public function solution_videoconference(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $solution=solution3Model::get();
        return view('fontend.solutionStep3',[
            'solution'=>$solution,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function solutionStep3($id){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $solutiontype=solution2Model::where('solution2_id',$id)->first();
        if($solutiontype==null){
            $solutiontype->solution2_img=null;
        }
        $solution=solution3Model::where('solution2_id',$id)->get();

        if($solutiontype->step=='2'){
            $item=solution5Model::where('solution4_id',$id)->get();
        }else{
            $item=null;
        }

        return view('fontend.solutionStep3',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)->with('item',$item);
    }
    public function solution_personcal(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $solution=solution4Model::get();
        return view('fontend.solutionStep4',[
            'solution'=>$solution,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function solutionStep4($id){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $solutiontype=solution3Model::where('solution3_id',$id)->first();
        if($solutiontype==null){
            $solutiontype->solution3_img=null;
        }
        // $solution=solution4Model::where('solution3_id',$id)->get();
        if($solutiontype->step=='3'){
            $item=solution5Model::where('solution4_id',$id)->get();
        }else{
            $item=null;
        }
        
        return view('fontend.solutionStep4',[
            // 'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)->with('item',$item);
    }


    public function news(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $news=newsModel::paginate(5);

        return view('fontend.news')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('news',$news);
    }
    public function newsDetail($id){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $news=newsModel::where('news_id',$id)->first();

        return view('fontend.newsDetail')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('news',$news);
    }
    public function innovation(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $in=innovationModel::paginate(3);

        return view('fontend.innovation')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('in',$in);
    }
    public function innovationDetail($id){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $in=innovationModel::where('in_id',$id)->first();

        return view('fontend.InnovationDetail')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('in',$in);
    }
    public function contact(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('fontend.contact')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    


    public function applyForm_step1(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('fontend.applyForm_step1')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function applyForm_step2(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('fontend.applyForm_step2')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function applyForm_step3(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('fontend.applyForm_step3')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function applyForm_step4(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('fontend.applyForm_step4')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function applyForm_step5(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('fontend.applyForm_step5')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
    public function applyForm_step6(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        return view('fontend.applyForm_step6')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype);
    }
}
