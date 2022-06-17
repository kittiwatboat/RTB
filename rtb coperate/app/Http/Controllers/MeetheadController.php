<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\meet_headModel;

class MeetheadController extends Controller
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
    public function meet_head(){
        $meet_head=meet_headModel::paginate(10);
        return view('backend.meet_head.index')->with('meet_head',$meet_head);
    }
    public function add(){
        return view('backend.meet_head.add');
    }
    public function addsub(Request $request){
        $meet_head=new meet_headModel;
        $meet_head->nameth=$request->nameth;
        $meet_head->nameen=$request->nameen;
        $meet_head->desth=$request->desth;
        $meet_head->desen=$request->desen;
        $meet_head->detailth=$request->detailth;
        $meet_head->detailen=$request->detailen;
        $filename = 'meet_head_img_' . date('dmY-His');
        $file = $request->meet_head_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->meet_head_img != null){
                //     Storage::disk('public')->delete($arti->meet_head_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/meet_head/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $meet_head->meet_head_img = $newLG;
            }
        }
        $meet_head->save();
        return redirect('/backoffice/meet_head');
    }
    public function edit($id){
        $meet_head=meet_headModel::find($id);
        return view('backend.meet_head.edit')->with('meet_head', $meet_head);
    }
    public function editsub(Request $request){
        $meet_head= meet_headModel::find($request->meet_head_id);
        $meet_head->nameth=$request->nameth;
        $meet_head->nameen=$request->nameen;
        $meet_head->desth=$request->desth;
        $meet_head->desen=$request->desen;
        $meet_head->detailth=$request->detailth;
        $meet_head->detailen=$request->detailen;
        $filename = 'meet_head_img_' . date('dmY-His');
        $file = $request->meet_head_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($meet_head->meet_head_img != null){
                    Storage::disk('public')->delete($meet_head->meet_head_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/meet_head/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $meet_head->meet_head_img = $newLG;
            }
        }
        $meet_head->save();
        return redirect()->back();
    }
    public function delete($id){
        $meet_head=meet_headModel::find($id);
        if($meet_head->meet_head_img != null){
            Storage::disk('public')->delete($meet_head->meet_head_img);
        }
        $a=meet_headModel::destroy($meet_head->meet_head_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
