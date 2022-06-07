<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\bannerModel;
class BannerController extends Controller
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
        $ban=bannerModel::paginate(10);
        return view('backend.banner.index')->with('ban', $ban);
    }
    public function add() {
        return view('backend.banner.add');
    }
    public function addsub(Request $request) {
        $ban=new bannerModel();
        $filename = 'img_' . date('dmY-His');
        $file = $request->img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->img != null){
                //     Storage::disk('public')->delete($arti->img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/banner/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $ban->img = $newLG;
            }
        }
        $ban->save();
        return redirect('/backoffice/banner');

    }
    public function delete($id){
        $ban=bannerModel::find($id);
        if($ban->img != null){
            Storage::disk('public')->delete($ban->img);
        }
        $a=bannerModel::destroy($ban->ban_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
