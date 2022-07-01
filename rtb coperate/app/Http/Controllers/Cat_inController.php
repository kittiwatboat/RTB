<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\cat_inModel;

class Cat_inController extends Controller
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
    public function cat_in(){
        $cat_in=cat_inModel::paginate(10);
        return view('backend.cat_in.index')->with('cat_in',$cat_in);
    }
    public function add(){
        return view('backend.cat_in.add');
    }
    public function addsub(Request $request){
        $cat_in=new cat_inModel;
        $cat_in->nameth=$request->nameth;
        $cat_in->nameen=$request->nameen;
        $cat_in->save();
        return redirect('/backoffice/cat_in');
    }
    public function edit($id){
        $cat_in=cat_inModel::find($id);
        return view('backend.cat_in.edit')->with('cat_in', $cat_in);
    }
    public function editsub(Request $request){
        $cat_in= cat_inModel::find($request->cat_in_id);
        $cat_in->nameth=$request->nameth;
        $cat_in->nameen=$request->nameen;
        $cat_in->save();
        return redirect()->back();
    }
    public function delete($id){
        $cat_in=cat_inModel::find($id);
        if($cat_in->cat_in_img != null){
            Storage::disk('public')->delete($cat_in->cat_in_img);
        }
        $a=cat_inModel::destroy($cat_in->cat_in_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
