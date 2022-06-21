<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\catagoryModel;
use App\subcatagoryModel;
use App\reccommandModel;
use App\producttypeModel;
class CatagoryController extends Controller
{
    public function imageSize($find = null)
    {
        $arr = [
            'cover' => [
                'lg' => ['x' => "100%", 'y' => "100%"],
            ],
            'gallery' => [
                'lg' => ['x' => "100%", 'y' => "100%"],
            ]
        ];
        if ($find == null) {
            return $arr;
        } else {
            switch ($find) {
                case 'cover':
                    return $arr['cover'];
                    break;
                case 'gallery':
                    return $arr['gallery'];
                    break;
                default:
                    return [];
                    break;
            }
        }
    }
        public function catagory(){
        $cat=catagoryModel::paginate(10);
        return view('backend.product.catagory.index')->with('cat',$cat);
    }
    public function catagoryadd(){
        return view('backend.product.catagory.add');
    }
    public function catagoryaddsub(Request $request){
        $cat=new catagoryModel;
        $cat->nameth=$request->nameth;
        $cat->nameen=$request->nameen;
        $cat->detailth=$request->detailth;
        $cat->detailen=$request->detailen;
        $cat->save();
        return redirect("/backoffice/catagory");

    }
    public function catagoryedit($id){
        $cat=catagoryModel::find($id);
        return view('backend.product.catagory.edit')->with('cat',$cat);
    }
    public function catagoryeditsub(Request $request){
        $cat=catagoryModel::find($request->cat_id);
        $cat->nameth=$request->nameth;
        $cat->nameen=$request->nameen;
        $cat->detailth=$request->detailth;
        $cat->detailen=$request->detailen;
        $cat->save();
        return redirect()->back();

    }
    public function catagorydelete($id){
        $cat=catagoryModel::find($id);
        $a=catagoryModel::destroy($cat->cat_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
    public function subcatagory(){
        $scat=subcatagoryModel::join('catagory','catagory.cat_id','=','subcatagory.cat_id')
        ->select('subcatagory.*','catagory.nameth')
        ->paginate(10);
        return view('backend.product.subcatagory.index')->with('scat',$scat);
    }
    public function subcatagoryadd(){
        $cat=catagoryModel::get();
        return view('backend.product.subcatagory.add')->with('cat',$cat);
    }
    public function subcatagoryaddsub(Request $request){
        $cat=new subcatagoryModel;
        $cat->cat_id=$request->cat_id;
        $cat->subnameth=$request->subnameth;
        $cat->subnameen=$request->subnameen;
        $cat->save();
        return redirect("/backoffice/subcatagory");

    }
    public function subcatagoryedit($id){
        $cat=subcatagoryModel::find($id);
        return view('backend.product.subcatagory.edit')->with('cat',$cat);
    }
    public function subcatagoryeditsub(Request $request){
        $cat=subcatagoryModel::find($request->scat_id);
        $cat->cat_id=$request->cat_id;
        $cat->subnameth=$request->subnameth;
        $cat->subnameen=$request->subnameen;
        $cat->save();
        return redirect()->back();

    }
    public function subcatagorydelete($id){
        $cat=subcatagoryModel::find($id);
        $a=subcatagoryModel::destroy($cat->scat_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
    public function reccommand($id){
        $sub=subcatagoryModel::find($id);
        $pro=producttypeModel::where('scat_id',$sub->scat_id)->get();
        // dd($pro);
        $rec=reccommandModel::join('subcatagory','reccommand.scat_id','=','subcatagory.scat_id')
        ->join('producttype','reccommand.pt_id','=','producttype.pt_id')
        ->select('producttype.typenameth','subcatagory.*','reccommand.*')
        ->where('reccommand.scat_id',$sub->scat_id)
        ->paginate(10);
        // dd($rec);
        return view('backend.product.reccommand',[
           
            'sub'=>$sub,
            'pro'=>$pro
        ])->with('rec',$rec);
    }
    public function recsubmit(Request $request){
        $rec=new reccommandModel;
        // dd($request->pt_id);
        $rec->scat_id=$request->scat_id;
        $rec->pt_id=$request->pt_id;

        $rec->save();
        return redirect()->back();
    }
    public function recdelete($id){
        $cat=reccommandModel::find($id);
        $a=reccommandModel::destroy($cat->rec_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
