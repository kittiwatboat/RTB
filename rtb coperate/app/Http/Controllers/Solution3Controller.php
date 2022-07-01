<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\solution3Model;

use App\solution2Model;

class Solution3Controller extends Controller
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
    public function solution3(){
        $solution3=solution3Model::paginate(10);
        return view('backend.solution3.index')->with('solution3',$solution3);
    }
    public function add(){
        return view('backend.solution3.add');
    }
    public function addsub(Request $request){
        $solution3=new solution3Model;
        
        $solution3->solution2_id=$request->solution2_id;

        $solution2=solution2Model::find($request->solution2_id);
        if($solution2!=null){
            $solution3->solutiontype_id=$solution2->solutiontype_id;
        }
        


        $solution3->nameth=$request->nameth;
        $solution3->nameen=$request->nameen;
        $solution3->desth=$request->desth;
        $solution3->desen=$request->desen;
        $solution3->detailth=$request->detailth;
        $solution3->detailen=$request->detailen;
        $filename = 'solution3_img_' . date('dmY-His');
        $file = $request->solution3_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->solution3_img != null){
                //     Storage::disk('public')->delete($arti->solution3_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solution3/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solution3->solution3_img = $newLG;
            }
        }
        $solution3->save();

        $solution3->id=$solution3->solution3_id;
        $solution3->save();
        return redirect('/backoffice/solution3');
    }
    public function edit($id){
        $solution3=solution3Model::find($id);
        return view('backend.solution3.edit')->with('solution3', $solution3);
    }
    public function editsub(Request $request){
        $solution3= solution3Model::find($request->solution3_id);

        $solution3->solution2_id=$request->solution2_id;

        $solution2=solution2Model::find($request->solution2_id);
        if($solution2!=null){
            $solution3->solutiontype_id=$solution2->solutiontype_id;
        }
        

        $solution3->nameth=$request->nameth;
        $solution3->nameen=$request->nameen;
        $solution3->desth=$request->desth;
        $solution3->desen=$request->desen;
        $solution3->detailth=$request->detailth;
        $solution3->detailen=$request->detailen;
        $filename = 'solution3_img_' . date('dmY-His');
        $file = $request->solution3_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($solution3->solution3_img != null){
                    Storage::disk('public')->delete($solution3->solution3_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solution3/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solution3->solution3_img = $newLG;
            }
        }
        $solution3->save();
        return redirect()->back();
    }
    public function delete($id){
        $solution3=solution3Model::find($id);
        if($solution3->solution3_img != null){
            Storage::disk('public')->delete($solution3->solution3_img);
        }
        $a=solution3Model::destroy($solution3->solution3_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
