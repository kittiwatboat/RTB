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
use App\partnergalModel;
use App\meet_headModel;
use App\meet_bodyModel;
use App\meet_typeModel;
use App\visionModel;

use App\workModel;
use App\innovationModel;
use App\newsModel;

use App\cat_newsModel;
use App\cat_inModel;


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
        $gal=partnergalModel::get();
        $meet_head=meet_headModel::first();
        // $meet_body=meet_bodyModel::get();
        $meet_type=meet_typeModel::get();

        $work=workModel::get();

        return view('fontend.about')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('vision',$vision)->with('partner',$partner)->with('meet_head',$meet_head)
        ->with('work',$work)->with('meet_type',$meet_type)->with('gal',$gal);
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
        $itemp=solution5Model::where('step','1')->where('solution4_id',$id)->get();

        return view('fontend.solutionStep2',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)->with('itemp',$itemp);
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
        $itemp=solution5Model::where('step','2')->where('solution4_id',$id)->get();

        return view('fontend.solutionStep3',[
            'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)->with('itemp',$itemp);
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
            $itemp=solution5Model::where('step','3')->where('solution4_id',$id)->get();

        return view('fontend.solutionStep4',[
            // 'solution'=>$solution,
            'solutiontype'=>$solutiontype,
        ])->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)->with('itemp',$itemp);
    }


    
    public function news_cat($id){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $news=newsModel::where('cat_id',$id)->paginate(5);

        $cat_news=cat_newsModel::get();
        $cat=cat_newsModel::where('cat_news_id',$id)->first();

        return view('fontend.news')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('news',$news)->with('cat_news',$cat_news)->with('cat',$cat);
    }

    public function news(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $news=newsModel::paginate(5);

        $cat_news=cat_newsModel::get();

        return view('fontend.news')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('news',$news)->with('cat_news',$cat_news);
    }
    public function newsDetail($id){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $news=newsModel::where('news_id',$id)->first();

        $cat_news=cat_newsModel::get();

        return view('fontend.newsDetail')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('news',$news)->with('cat_news',$cat_news);
    }

    public function innovation_cat($id){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $in=innovationModel::where('cat_id',$id)->paginate(3);

        $cat=cat_inModel::where('cat_in_id',$id)->first();
        $cat_in=cat_inModel::get();

        return view('fontend.innovation')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('in',$in)->with('cat_in',$cat_in)->with('cat',$cat);
    }

    public function innovation(){
        $cata=catagoryModel::get();
        $sub=subcatagoryModel::get();
        $protype=producttypeModel::get();

        $in=innovationModel::paginate(3);

        $cat_in=cat_inModel::get();

        return view('fontend.innovation')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('in',$in)->with('cat_in',$cat_in);
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
