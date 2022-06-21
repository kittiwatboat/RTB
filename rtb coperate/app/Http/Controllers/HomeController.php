<?php

namespace App\Http\Controllers;

use App\aboutModel;
use Illuminate\Http\Request;
use App\Mail\contactus;
use App\bannerModel;
use App\brccouseModel;
use App\headrateModel;
use App\newpromotionModel;
use App\brclayoutModel;
use App\brclayoutimageModel;
use App\brcdownloadModel;
use App\brcfacilitiesModel;
use App\brcgalleryModel;
use App\brchallofframeModel;
use App\proshopModel;
use App\brclayoutvideoModel;
use App\kyclayoutModel;
use App\kyclayoutvideoModel;
use App\kyclayoutimageModel;
use App\contactmailModel;
use App\contactModel;
use App\annualimageModel;
use App\annualtournamentModel;
use App\messModel;
use App\buttonModel;
use App\new_imageModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
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

class HomeController extends Controller
{
   public function index(){
       $ban=bannerModel::find(1);
       $ban2=bannerModel::find(2);
       $mess=messModel::find(1);
       return view('fontend.index')->with('ban',$ban)->with('ban2',$ban2)->with('mess',$mess);
   }
   public function news(){
    $ldate = date('Y-m-d');
       $new=newpromotionModel::where('np_type','=','News')->simplepaginate(9);
       $new2=newpromotionModel::where('np_type','=','Promotion')->where('np_enddate','!=',$ldate)->simplepaginate(9);
       return view('fontend.news')->with('new',$new)->with('new2',$new2);
   }
   public function newallnew(){
    $ldate = date('Y-m-d');
    $new=newpromotionModel::where('np_club','=','Bangpakon')->orderby('created','desc')->simplepaginate(9);
    $new2=newpromotionModel::where('np_club','=','Khao Yai')->orderby('created','desc')->simplepaginate(9);
    return view('fontend.news')->with('new',$new)->with('new2',$new2);
}
public function newallold(){
    $ldate = date('Y-m-d');
    $new=newpromotionModel::where('np_club','=','Bangpakon')->orderby('created','asc')->simplepaginate(9);
    $new2=newpromotionModel::where('np_club','=','Khao Yai')->orderby('created','asc')->simplepaginate(9);
    return view('fontend.news')->with('new',$new)->with('new2',$new2);
}
   public function new(){
    $ldate = date('Y-m-d');
    $new=newpromotionModel::where('np_club','=','Bangpakon')->where('np_type','News')->simplepaginate(9);
    $new2=newpromotionModel::where('np_club','=','Khao Yai')->where('np_type','News')->simplepaginate(9);
    return view('fontend.news3')->with('new',$new)->with('new2',$new2);
}
public function newnew(){
    $ldate = date('Y-m-d');
    $new=newpromotionModel::where('np_club','=','Bangpakon')->where('np_type','News')->orderby('created','desc')->simplepaginate(9);
    $new2=newpromotionModel::where('np_club','=','Khao Yai')->where('np_type','News')->orderby('created','desc')->simplepaginate(9);
    return view('fontend.news3')->with('new',$new)->with('new2',$new2);
}
public function newold(){
    $ldate = date('Y-m-d');
    $new=newpromotionModel::where('np_club','=','Bangpakon')->where('np_type','News')->orderby('created','asc')->simplepaginate(9);
    $new2=newpromotionModel::where('np_club','=','Khao Yai')->where('np_type','News')->orderby('created','asc')->simplepaginate(9);
    return view('fontend.news3')->with('new',$new)->with('new2',$new2);
}
public function promotionnew(){
    $ldate = date('Y-m-d');
    $new=newpromotionModel::where('np_club','=','Bangpakon')->where('np_type','Promotion')->where('np_enddate','!=',$ldate)->orderby('created','desc')->simplepaginate(9);
    $new2=newpromotionModel::where('np_club','=','Khao Yai')->where('np_type','Promotion')->where('np_enddate','!=',$ldate)->orderby('created','desc')->simplepaginate(9);
    return view('fontend.news2')->with('new',$new)->with('new2',$new2);
}
public function promotionold(){
    $ldate = date('Y-m-d');
    $new=newpromotionModel::where('np_club','=','Bangpakon')->where('np_type','Promotion')->where('np_enddate','!=',$ldate)->orderby('created','asc')->simplepaginate(9);
    $new2=newpromotionModel::where('np_club','=','Khao Yai')->where('np_type','Promotion')->where('np_enddate','!=',$ldate)->orderby('created','asc')->simplepaginate(9);
    return view('fontend.news2')->with('new',$new)->with('new2',$new2);
}
public function promotion(){
    $ldate = date('Y-m-d');
    $new=newpromotionModel::where('np_club','=','Bangpakon')->where('np_type','Promotion')->where('np_enddate','!=',$ldate)->simplepaginate(9);
    $new2=newpromotionModel::where('np_club','=','Khao Yai')->where('np_type','Promotion')->where('np_enddate','!=',$ldate)->simplepaginate(9);
    return view('fontend.news2')->with('new',$new)->with('new2',$new2);
}
   public function newsnews(){
    $ldate = date('Y-m-d');
    $new=newpromotionModel::where('np_type','=','News')->where('np_club','=','Bangpakon')->simplepaginate(9);
    $new2=newpromotionModel::where('np_type','=','News')->where('np_club','=','Khao Yai')->simplepaginate(9);
    return view('fontend.news')->with('new',$new)->with('new2',$new2);
}
   public function news_inside($id){
    $news=newpromotionModel::find($id);
    $im=new_imageModel::where('np_id',$id)->get();

    return view('fontend.news_inside')->with('news',$news)->with('im',$im);
}
   public function brcrate(){
        $head=headrateModel::where('hr_type','Bangpakong')->get();
        $brc=brccouseModel::get();
        $head1=headrateModel::find(1);
        $brc1=brccouseModel::get();
        $brc2=brccouseModel::find(2);
        return view('fontend.brc_rate',["head"=>$head],["head1"=>$head1])->with('brc',$brc)->with('brc1',$brc1)->with('brc2',$brc2);
   }
   public function brclayout(){
    $brcd=brcdownloadModel::find(1);
    $brcl=brclayoutModel::find(1);
    $loo=brclayoutModel::get();
    $brcli=brclayoutimageModel::paginate();
    $brclv=brclayoutvideoModel::paginate();
    $brcdown=brcdownloadModel::find(1);
    return view('fontend.brc_layout',["loo"=>$loo])->with('brcdown',$brcdown)->with('brcl',$brcl)->with('brcd',$brcd)->with('brcli',$brcli)->with('brclv',$brclv);
   }
   public function brclayoutid($id){
    $brcd=brcdownloadModel::find(1);
    $brcl=brclayoutModel::find($id);
    $loo=brclayoutModel::get();
    $brcli=brclayoutimageModel::paginate();
    $brclv=brclayoutvideoModel::paginate();
    $brcdown=brcdownloadModel::find(1);

    return view('fontend.brc_layout',["loo"=>$loo])->with('brcdown',$brcdown)->with('id',$id)->with('brcl',$brcl)->with('brcd',$brcd)->with('brcli',$brcli)->with('brclv',$brclv);
   }
   public function brclayout2($id){
    $brcd=brcdownloadModel::find(1);
    $brcl=brclayoutModel::find($id);
    $loo=brclayoutModel::get();
    $brcli=brclayoutimageModel::paginate();
    $brclv=brclayoutvideoModel::paginate();

    return view('fontend.brc_layout',["loo"=>$loo])->with('brcl',$brcl)->with('brcd',$brcd)->with('brcli',$brcli)->with('brclv',$brclv);
   }
   public function brcfacilities(){
       $faci1=brcfacilitiesModel::where('course_type','Bangpakong')->get();
      
       return view('fontend.brc_facilities')->with('faci1',$faci1);
   }
   public function brchallofframe(){
       $hall1=brchallofframeModel::where('course_type','=','Bangpakong')->get();
       return view('fontend.brc_hallofframe')->with('hall1',$hall1);
   }
   public function brcgallery(){
       $gal1=brcgalleryModel::where('course_type','Bangpakong')->get();
       $gal2=brcgalleryModel::where('course_type','Bangpakong')->where('brcg_type','Golf Course')->get();
       $gal3=brcgalleryModel::where('course_type','Bangpakong')->where('brcg_type','Facilities')->get();
       $gal4=brcgalleryModel::where('course_type','Bangpakong')->where('brcg_type','Caddy Gallery')->get();
       $but=buttonModel::find(1);
    return view('fontend.brc_gallery',["gal1"=>$gal1],["gal2"=>$gal2],["gal3"=>$gal3],["gal4"=>$gal4])->with('but',$but);
   }
   public function about(){
       $about1=aboutModel::find(1);
       $about2=aboutModel::find(2);
    return view('fontend.about',["about1"=>$about1])->with('about2',$about2);
   }
   public function proshop(){
       $pros1=proshopModel::where('ps_club','=','Bangpakong')->orderby('ps_id','desc')->paginate(9);
       $pros2=proshopModel::where('ps_club','=','Khaoyai')->orderby('ps_id','desc')->paginate(9);
    return view('fontend.proshop')->with('pros1',$pros1)->with('pros2',$pros2);
   }
   public function proshopnews(){
    $pros1=proshopModel::where('ps_club','=','Bangpakong')->where('ps_type','=','News')->orderby('ps_id','desc')->paginate(9);
    $pros2=proshopModel::where('ps_club','=','Khaoyai')->where('ps_type','=','News')->orderby('ps_id','desc')->paginate(9);
 return view('fontend.proshop')->with('pros1',$pros1)->with('pros2',$pros2);
}
public function proshopsale(){
    $pros1=proshopModel::where('ps_club','=','Bangpakong')->where('ps_type','=','Sale')->orderby('ps_id','desc')->paginate(9);
    $pros2=proshopModel::where('ps_club','=','Khaoyai')->where('ps_type','=','Sale')->orderby('ps_id','desc')->paginate(9);
 return view('fontend.proshop')->with('pros1',$pros1)->with('pros2',$pros2);
}
   public function kycrate(){
    $head=headrateModel::where('hr_type','Khao Yai')->get();
    $brc=brccouseModel::get();
    $head1=headrateModel::find(5);
    $brc1=brccouseModel::get();
    $brc2=brccouseModel::find(14);
    return view('fontend.kyc_rate',["head"=>$head],["head1"=>$head1])->with('brc',$brc)->with('brc1',$brc1)->with('brc2',$brc2);
    }
    public function kyclayout(){
        $brcd=brcdownloadModel::find(1);
        $kycl=kyclayoutModel::find(1);
        $loo=brclayoutModel::get();
        $kycli=kyclayoutimageModel::paginate();
        $kyclv=kyclayoutvideoModel::paginate();
        $brcdown=brcdownloadModel::find(1);



        $vision=visionModel::first();
        $partner=partnerModel::first();
        $meet_head=meet_headModel::first();
        $meet_body=meet_bodyModel::get();

        return view('fontend.about')->with('cata',$cata)->with('sub',$sub)->with('protype',$protype)
        ->with('vision',$vision)->with('partner',$partner)->with('meet_head',$meet_head)->with('meet_body',$meet_body);
    }
    public function kycaccommodations(){
        $faci1=brcfacilitiesModel::where('course_type','accommodations')->get();
        return view('fontend.kyc_accommodations')->with('faci1',$faci1); 
    }
    public function kychallofframe(){
        $hall1=brchallofframeModel::where('course_type','=','Khaoyai')->orderby('created','desc')->get();
        return view('fontend.kyc_hallofframe')->with('hall1',$hall1);
    }
    public function kycgallery(){
        $gal1=brcgalleryModel::where('course_type','=','Khaoyai')->get();
        $gal2=brcgalleryModel::where('course_type','=','Khaoyai')->where('brcg_type','=','Golf Course')->get();
        $gal3=brcgalleryModel::where('course_type','=','Khaoyai')->where('brcg_type','=','Facilities')->get();
        $gal4=brcgalleryModel::where('course_type','=','Khaoyai')->where('brcg_type','=','Caddy Gallery')->get();
        $but=buttonModel::find(1);
     return view('fontend.kyc_gallery',["but"=>$but])->with('gal1',$gal1)->with('gal2',$gal2)->with('gal3',$gal3)->with('gal4',$gal4);
    }
    public function contact(){
        $co=contactModel::find(1);
        $co2=contactModel::find(2);

        return view('fontend.contact')->with('co',$co)->with('co2',$co2);
    }
    public function contactsub(Request $request){
        $data_insert = [
            'subject' => $request->subject,
            'fname'=> $request->fname,
            'lname'=> $request->lname,
            'email'=> $request->email,
            'phone'=>$request->phone,
            'message'=> $request->message,
            
        ];
   /*      dd($data_insert); */
        Mail::send(new contactus($data_insert));
        $cm=new contactmailModel;
        $cm->cm_fname=$request->fname;
        $cm->cm_lname=$request->lname;
        $cm->cm_phone=$request->phone;
        $cm->cm_email=$request->email;
        $cm->cm_message=$request->message;
        $cm->save();
        return redirect(Session::get('lang')."/contact");
    }
    public function kycabout(){
        $about=aboutModel::find(2);
        return view('fontend.kyc_about',["about"=>$about]);
    }
    public function brcabout(){
        $about=aboutModel::find(1);
        return view('fontend.brc_about',["about"=>$about]);
    }
    public function brcannualtournament($year,$month){
        // $annual=annualtournamentModel::paginate(3);
        $loop = [];
        $annual=annualtournamentModel::where('course_type','Bangpakong')->get();
        for($i=0;$i<count($annual);$i++){
            $date = explode("-",$annual[$i]->created);
            if($date[0] == $year && $date[1] == $month){
                array_push($loop,$annual[$i]);
            }
        }
        return response()->json(array('annual'=> $loop), 200);
    }
    public function kycannualtournament($year,$month){
        // $annual=annualtournamentModel::paginate(3);
        $loop = [];
        $annual=annualtournamentModel::where('course_type','Khaoyai')->get();
        for($i=0;$i<count($annual);$i++){
            $date = explode("-",$annual[$i]->created);
            if($date[0] == $year && $date[1] == $month){
                array_push($loop,$annual[$i]);
            }
        }
        return response()->json(array('annual'=> $loop), 200);
    }

    public function brchalloffframeall(){
        $hall1=brchallofframeModel::where('course_type','Bangpakon')->get();
        return response()->json(array('hall'=>$hall1),200);
    }
    public function kychalloffframeall(){
        $hall1=brchallofframeModel::where('course_type','Khaoyai')->get();
        return response()->json(array('hall'=>$hall1),200);
    }

    public function brchalloffframelist($year,$pole){
        $hall1=brchallofframeModel::where('brch_year',"=",$year)->where('brch_score',"=",$pole)->where('course_type','Bangpakon')->paginate();
        return response()->json(array('hall'=>$hall1),200);
    }
    public function kychalloffframelist($year,$pole){
        $hall1=brchallofframeModel::where('brch_year',"=",$year)->where('brch_score',"=",$pole)->where('course_type','Khaoyai')->paginate();
        return response()->json(array('hall'=>$hall1),200);
    }

    public function brcannualdetail($id){
        $annual=annualtournamentModel::find($id);
        $annualimg=annualimageModel::get();
        return view('fontend.annualtour_detail',["annual"=>$annual],["annualimg"=>$annualimg]);
    }
    public function kycannualdetail($id){
        $annual=annualtournamentModel::find($id);
        $annualimg=annualimageModel::get();
        return view('fontend.annualtour_detail',["annual"=>$annual],["annualimg"=>$annualimg]);
    }
    public function brcrule(){
        return view('fontend.brc_rule');
    }
    public function kycrule(){
        return view('fontend.kyc_rule');
    }
    public function Accommodations(){
        return view('fontend.kyc_accommodations');
    }
}
