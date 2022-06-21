<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\partnerModel;

class PartnerController extends Controller
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
    public function partner(){
        $partner=partnerModel::paginate(10);
        return view('backend.partner.index')->with('partner',$partner);
    }
    public function add(){
        return view('backend.partner.add');
    }
    public function addsub(Request $request){
        $partner=new partnerModel;
        $partner->nameth=$request->nameth;
        $partner->nameen=$request->nameen;
        $partner->desth=$request->desth;
        $partner->desen=$request->desen;
        $partner->detailth=$request->detailth;
        $partner->detailen=$request->detailen;
        $filename = 'partner_img_' . date('dmY-His');
        $file = $request->partner_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->partner_img != null){
                //     Storage::disk('public')->delete($arti->partner_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/partner/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $partner->partner_img = $newLG;
            }
        }
        $partner->save();
        return redirect('/backoffice/partner');
    }
    public function edit($id){
        $partner=partnerModel::find($id);
        return view('backend.partner.edit')->with('partner', $partner);
    }
    public function editsub(Request $request){
        $partner= partnerModel::find($request->partner_id);
        $partner->nameth=$request->nameth;
        $partner->nameen=$request->nameen;
        $partner->desth=$request->desth;
        $partner->desen=$request->desen;
        $partner->detailth=$request->detailth;
        $partner->detailen=$request->detailen;
        $filename = 'partner_img_' . date('dmY-His');
        $file = $request->partner_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($partner->partner_img != null){
                    Storage::disk('public')->delete($partner->partner_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/partner/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $partner->partner_img = $newLG;
            }
        }
        $partner->save();
        return redirect()->back();
    }
    public function delete($id){
        $partner=partnerModel::find($id);
        if($partner->partner_img != null){
            Storage::disk('public')->delete($partner->partner_img);
        }
        $a=partnerModel::destroy($partner->partner_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
