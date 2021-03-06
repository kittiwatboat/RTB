<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\meet_typeModel;

class MeettypeController extends Controller
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
    public function meet_type(){
        $meet_type=meet_typeModel::paginate(10);
        return view('backend.meet_type.index')->with('meet_type',$meet_type);
    }
    public function add(){
        return view('backend.meet_type.add');
    }
    public function addsub(Request $request){
        $meet_type=new meet_typeModel;

        $meet_type->nameth=$request->nameth;
        $meet_type->nameen=$request->nameen;
      
        $meet_type->save();
        return redirect('/backoffice/meet_type');
    }
    public function edit($id){
        $meet_type=meet_typeModel::find($id);
        return view('backend.meet_type.edit')->with('meet_type', $meet_type);
    }
    public function editsub(Request $request){
        $meet_type= meet_typeModel::find($request->meet_type_id);

        
        $meet_type->nameth=$request->nameth;
        $meet_type->nameen=$request->nameen;
     
        $meet_type->save();
        return redirect()->back();
    }
    public function delete($id){
        $meet_type=meet_typeModel::find($id);
        if($meet_type->meet_type_img != null){
            Storage::disk('public')->delete($meet_type->meet_type_img);
        }
        $a=meet_typeModel::destroy($meet_type->meet_type_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
