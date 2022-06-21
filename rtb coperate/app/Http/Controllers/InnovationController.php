<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\innovationModel;
class InnovationController extends Controller
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
    public function index() {
        $inno=innovationModel::paginate(10);
        return view('backend.innovation.index')->with('inno',$inno);
    }
    public function add() {
        return view('backend.innovation.add');
    }
    public function addsub(Request $request) {
        $inno=new innovationModel;
        $inno->in_nameth=$request->in_nameth;
        $inno->in_nameen=$request->in_nameen;
        $inno->in_detailth=$request->in_detailth;
        $inno->in_detailen=$request->in_detailen;
        $inno->in_dexcriptionth=$request->in_dexcriptionth;
        $inno->in_dexcriptionen=$request->in_dexcriptionen;
        $filename = 'in_img_' . date('dmY-His');
        $file = $request->in_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($inno->in_img != null){
                //     Storage::disk('public')->delete($inno->in_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/innovation/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $inno->in_img = $newLG;
            }
        }
        $inno->save();
        return redirect("/backoffice/innovation");
    }
    public function edit($id) {
        $inno=innovationModel::find($id);
        return view('backend.innovation.edit')->with('inno',$inno);
    }
    public function editsub(Request $request) {
        $inno= innovationModel::find($request->in_id);
        $inno->in_nameth=$request->in_nameth;
        $inno->in_nameen=$request->in_nameen;
        $inno->in_detailth=$request->in_detailth;
        $inno->in_detailen=$request->in_detailen;
        $inno->in_dexcriptionth=$request->in_dexcriptionth;
        $inno->in_dexcriptionen=$request->in_dexcriptionen;
        $filename = 'in_img_' . date('dmY-His');
        $file = $request->in_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($inno->in_img != null){
                    Storage::disk('public')->delete($inno->in_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/innovation/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $inno->in_img = $newLG;
            }
        }
        $inno->save();
        return redirect()->back();
    }
    public function delete($id){
        $in=innovationModel::find($id);
        if($in->in_img != null){
            Storage::disk('public')->delete($in->in_img);
        }
        $a=innovationModel::destroy($in->in_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
