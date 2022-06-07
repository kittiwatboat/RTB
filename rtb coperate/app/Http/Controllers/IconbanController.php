<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\iconbanModel;
class IconbanController extends Controller
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
        $icon=iconbanModel::paginate(10);
        return view('backend.icon.index')->with('icon', $icon);
    }
    public function add() {
        return view('backend.icon.add');
    }
    public function addsub(Request $request) {
        $icon=new iconbanModel();
        $filename = 'icon_' . date('dmY-His');
        $file = $request->icon;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->icon != null){
                //     Storage::disk('public')->delete($arti->icon);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/icon/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $icon->icon = $newLG;
            }
        }
        $icon->save();
        return redirect('/backoffice/iconban');

    }
    public function delete($id){
        $icon=iconbanModel::find($id);
        if($icon->icon != null){
            Storage::disk('public')->delete($icon->icon);
        }
        $a=iconbanModel::destroy($icon->icb_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
