<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\solution5Model;

use App\solution4Model;
use App\solution3Model;
use App\solution2Model;
use App\solutiontypeModel;

class Solution5Controller extends Controller
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
    public function solution5(){
        $solution5=solution5Model::paginate(10);
        return view('backend.solution5.index')->with('solution5',$solution5);
    }
    public function add(){
        return view('backend.solution5.add');
    }
    public function addsub(Request $request){
        $solution5=new solution5Model;

        $solution5->step=$request->step;

        $solution5->solution4_id=$request->solution_id;
        

        $solution5->catth=$request->catth;
        $solution5->caten=$request->caten;

        $solution5->nameth=$request->nameth;
        $solution5->nameen=$request->nameen;
        $solution5->desth=$request->desth;
        $solution5->desen=$request->desen;
        $solution5->detailth=$request->detailth;
        $solution5->detailen=$request->detailen;
        $filename = 'solution5_img_' . date('dmY-His');
        $file = $request->solution5_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->solution5_img != null){
                //     Storage::disk('public')->delete($arti->solution5_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solution5/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solution5->solution5_img = $newLG;
            }
        }
        $solution5->save();
        return redirect('/backoffice/solution5');
    }
    public function edit($id){
        $solution5=solution5Model::find($id);
        return view('backend.solution5.edit')->with('solution5', $solution5);
    }
    public function editsub(Request $request){
        $solution5= solution5Model::find($request->solution5_id);

        $solution5->step=$request->step;

        $solution5->solution4_id=$request->solution_id;
        

        $solution5->catth=$request->catth;
        $solution5->caten=$request->caten;
        
        $solution5->nameth=$request->nameth;
        $solution5->nameen=$request->nameen;
        $solution5->desth=$request->desth;
        $solution5->desen=$request->desen;
        $solution5->detailth=$request->detailth;
        $solution5->detailen=$request->detailen;
        $filename = 'solution5_img_' . date('dmY-His');
        $file = $request->solution5_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($solution5->solution5_img != null){
                    Storage::disk('public')->delete($solution5->solution5_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/solution5/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $solution5->solution5_img = $newLG;
            }
        }
        $solution5->save();
        return redirect()->back();
    }
    public function delete($id){
        $solution5=solution5Model::find($id);
        if($solution5->solution5_img != null){
            Storage::disk('public')->delete($solution5->solution5_img);
        }
        $a=solution5Model::destroy($solution5->solution5_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }



    public function get_solution(Request $r)
    {
    if($r->ajax()){
		 $step=$r->selectValue;
         if($step=='1'){
            $div=solutiontypeModel::get();
         }elseif($step=='2'){
            $div=solution2Model::get();
         }elseif($step=='3'){
            $div=solution3Model::get();
         }else{
            $div=solution4Model::get();
         }

        return response()->json(['div'=>$div,]);
    }
    }


}
