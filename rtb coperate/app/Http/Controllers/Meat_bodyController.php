<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\meet_bodyModel;

class Meet_bodyController extends Controller
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
    public function meet_body(){
        $meet_body=meet_bodyModel::paginate(10);
        return view('backend.meet_body.index')->with('meet_body',$meet_body);
    }
    public function add(){
        return view('backend.meet_body.add');
    }
    public function addsub(Request $request){
        $meet_body=new meet_bodyModel;
        $meet_body->nameth=$request->nameth;
        $meet_body->nameen=$request->nameen;
        $meet_body->desth=$request->desth;
        $meet_body->desen=$request->desen;
        $meet_body->detailth=$request->detailth;
        $meet_body->detailen=$request->detailen;
        $filename = 'meet_body_img_' . date('dmY-His');
        $file = $request->meet_body_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->meet_body_img != null){
                //     Storage::disk('public')->delete($arti->meet_body_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/meet_body/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $meet_body->meet_body_img = $newLG;
            }
        }
        $meet_body->save();
        return redirect('/backoffice/meet_body');
    }
    public function edit($id){
        $meet_body=meet_bodyModel::find($id);
        return view('backend.meet_body.edit')->with('meet_body', $meet_body);
    }
    public function editsub(Request $request){
        $meet_body= meet_bodyModel::find($request->meet_body_id);
        $meet_body->nameth=$request->nameth;
        $meet_body->nameen=$request->nameen;
        $meet_body->desth=$request->desth;
        $meet_body->desen=$request->desen;
        $meet_body->detailth=$request->detailth;
        $meet_body->detailen=$request->detailen;
        $filename = 'meet_body_img_' . date('dmY-His');
        $file = $request->meet_body_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($meet_body->meet_body_img != null){
                    Storage::disk('public')->delete($meet_body->meet_body_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/meet_body/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $meet_body->meet_body_img = $newLG;
            }
        }
        $meet_body->save();
        return redirect()->back();
    }
    public function delete($id){
        $meet_body=meet_bodyModel::find($id);
        if($meet_body->meet_body_img != null){
            Storage::disk('public')->delete($meet_body->meet_body_img);
        }
        $a=meet_bodyModel::destroy($meet_body->meet_body_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
