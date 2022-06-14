<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\solution2Model;

class Solution2Controller extends Controller
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
    public function solution2(){
        $solution2=solution2Model::paginate(10);
        return view('backend.solution2.index')->with('solution2',$solution2);
    }
    public function add(){
        return view('backend.solution2.add');
    }
    public function addsub(Request $request){
        $solution2=new solution2Model;
        
        $solution2->solutiontype_id=$request->solutiontype_id;


        $solution2->nameth=$request->nameth;
        $solution2->nameen=$request->nameen;
        $solution2->desth=$request->desth;
        $solution2->desen=$request->desen;
        $solution2->detailth=$request->detailth;
        $solution2->detailen=$request->detailen;
        $filename = 'solution2_img_' . date('dmY-His');
        $file = $request->solution2_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->solution2_img != null){
                //     Storage::disk('public')->delete($arti->solution2_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solution2/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solution2->solution2_img = $newLG;
            }
        }
        $solution2->save();
        return redirect('/backoffice/solution2');
    }
    public function edit($id){
        $solution2=solution2Model::find($id);
        return view('backend.solution2.edit')->with('solution2', $solution2);
    }
    public function editsub(Request $request){
        $solution2= solution2Model::find($request->solution2_id);

        $solution2->solutiontype_id=$request->solutiontype_id;

        $solution2->nameth=$request->nameth;
        $solution2->nameen=$request->nameen;
        $solution2->desth=$request->desth;
        $solution2->desen=$request->desen;
        $solution2->detailth=$request->detailth;
        $solution2->detailen=$request->detailen;
        $filename = 'solution2_img_' . date('dmY-His');
        $file = $request->solution2_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($solution2->solution2_img != null){
                    Storage::disk('public')->delete($solution2->solution2_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solution2/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solution2->solution2_img = $newLG;
            }
        }
        $solution2->save();
        return redirect()->back();
    }
    public function delete($id){
        $solution2=solution2Model::find($id);
        if($solution2->solution2_img != null){
            Storage::disk('public')->delete($solution2->solution2_img);
        }
        $a=solution2Model::destroy($solution2->solution2_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
