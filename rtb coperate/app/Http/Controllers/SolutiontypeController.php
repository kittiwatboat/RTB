<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\solutiontypeModel;

class SolutiontypeController extends Controller
{
    //
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
    public function solutiontype(){
        $solutiontype=solutiontypeModel::paginate(10);
        return view('backend.solutiontype.index')->with('solutiontype',$solutiontype);
    }
    public function add(){
        return view('backend.solutiontype.add');
    }
    public function addsub(Request $request){
        $solutiontype=new solutiontypeModel;

        $solutiontype->nameth=$request->nameth;
        $solutiontype->nameen=$request->nameen;
        $solutiontype->desth=$request->desth;
        $solutiontype->desen=$request->desen;
        $solutiontype->detailth=$request->detailth;
        $solutiontype->detailen=$request->detailen;
        $filename = 'solutiontype_img_' . date('dmY-His');
        $file = $request->solutiontype_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->solutiontype_img != null){
                //     Storage::disk('public')->delete($arti->solutiontype_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solutiontype/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solutiontype->solutiontype_img = $newLG;
            }
        }
        $solutiontype->save();

        $solutiontype->id=$solutiontype->solutiontype_id;
        $solutiontype->save();
        return redirect('/backoffice/solutiontype');
    }
    public function edit($id){
        $solutiontype=solutiontypeModel::find($id);
        return view('backend.solutiontype.edit')->with('solutiontype', $solutiontype);
    }
    public function editsub(Request $request){
        $solutiontype= solutiontypeModel::find($request->solutiontype_id);

        $solutiontype->nameth=$request->nameth;
        $solutiontype->nameen=$request->nameen;
        $solutiontype->desth=$request->desth;
        $solutiontype->desen=$request->desen;
        $solutiontype->detailth=$request->detailth;
        $solutiontype->detailen=$request->detailen;
        $filename = 'solutiontype_img_' . date('dmY-His');
        $file = $request->solutiontype_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($solutiontype->solutiontype_img != null){
                    Storage::disk('public')->delete($solutiontype->solutiontype_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solutiontype/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solutiontype->solutiontype_img = $newLG;
            }
        }
        $solutiontype->save();
        return redirect()->back();
    }
    public function delete($id){
        $solutiontype=solutiontypeModel::find($id);
        if($solutiontype->solutiontype_img != null){
            Storage::disk('public')->delete($solutiontype->solutiontype_img);
        }
        $a=solutiontypeModel::destroy($solutiontype->solutiontype_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
