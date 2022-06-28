<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\partnergalModel;

class PartnergalController extends Controller
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
    public function partnergal(){
        $partnergal=partnergalModel::paginate(10);
        return view('backend.partnergal.index')->with('partnergal',$partnergal);
    }
    public function add(){
        return view('backend.partnergal.add');
    }
    public function addsub(Request $request){
        $partnergal=new partnergalModel;
        $filename = 'partnergal_img_' . date('dmY-His');
        $file = $request->partnergal_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->partnergal_img != null){
                //     Storage::disk('public')->delete($arti->partnergal_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/partnergal/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $partnergal->partnergal_img = $newLG;
            }
        }
        $partnergal->save();
        return redirect('/backoffice/partnergal');
    }
    public function edit($id){
        $partnergal=partnergalModel::find($id);
        return view('backend.partnergal.edit')->with('partnergal', $partnergal);
    }
    public function editsub(Request $request){
        $partnergal= partnergalModel::find($request->partnergal_id);
        $filename = 'partnergal_img_' . date('dmY-His');
        $file = $request->partnergal_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($partnergal->partnergal_img != null){
                    Storage::disk('public')->delete($partnergal->partnergal_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/partnergal/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $partnergal->partnergal_img = $newLG;
            }
        }
        $partnergal->save();
        return redirect()->back();
    }
    public function delete($id){
        $partnergal=partnergalModel::find($id);
        if($partnergal->partnergal_img != null){
            Storage::disk('public')->delete($partnergal->partnergal_img);
        }
        $a=partnergalModel::destroy($partnergal->partnergal_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
