<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\solution4Model;

use App\solution3Model;

class Solution4Controller extends Controller
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
    public function solution4(){
        $solution4=solution4Model::paginate(10);
        return view('backend.solution4.index')->with('solution4',$solution4);
    }
    public function add(){
        return view('backend.solution4.add');
    }
    public function addsub(Request $request){
        $solution4=new solution4Model;
        
        $solution4->solution3_id=$request->solution3_id;

        $solution3=solution3Model::find($request->solution3_id);
        if($solution3!=null){
            $solution4->solutiontype_id=$solution3->solutiontype_id;
            $solution4->solution2_id=$solution3->solution2_id;
        }
        


        $solution4->nameth=$request->nameth;
        $solution4->nameen=$request->nameen;
        $solution4->desth=$request->desth;
        $solution4->desen=$request->desen;
        $solution4->detailth=$request->detailth;
        $solution4->detailen=$request->detailen;
        $filename = 'solution4_img_' . date('dmY-His');
        $file = $request->solution4_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->solution4_img != null){
                //     Storage::disk('public')->delete($arti->solution4_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solution4/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solution4->solution4_img = $newLG;
            }
        }
        $solution4->save();

        $solution4->id=$solution4->solution4_id;
        $solution4->save();
        return redirect('/backoffice/solution4');
    }
    public function edit($id){
        $solution4=solution4Model::find($id);
        return view('backend.solution4.edit')->with('solution4', $solution4);
    }
    public function editsub(Request $request){
        $solution4= solution4Model::find($request->solution4_id);

        $solution4->solution3_id=$request->solution3_id;

        $solution3=solution3Model::find($request->solution3_id);
        if($solution3!=null){
            $solution4->solutiontype_id=$solution3->solutiontype_id;
            $solution4->solution2_id=$solution3->solution2_id;
        }
        

        $solution4->nameth=$request->nameth;
        $solution4->nameen=$request->nameen;
        $solution4->desth=$request->desth;
        $solution4->desen=$request->desen;
        $solution4->detailth=$request->detailth;
        $solution4->detailen=$request->detailen;
        $filename = 'solution4_img_' . date('dmY-His');
        $file = $request->solution4_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($solution4->solution4_img != null){
                    Storage::disk('public')->delete($solution4->solution4_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solution4/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solution4->solution4_img = $newLG;
            }
        }
        $solution4->save();
        return redirect()->back();
    }
    public function delete($id){
        $solution4=solution4Model::find($id);
        if($solution4->solution4_img != null){
            Storage::disk('public')->delete($solution4->solution4_img);
        }
        $a=solution4Model::destroy($solution4->solution4_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
