<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\iconbanModel;
class BrandController extends Controller
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
        // $ban=bannerModel::paginate(10);
        $brand=iconbanModel::paginate(10);
        return view('backend.product.brand.index')->with('brand',$brand);
    }
    public function add(Request $request){
		try {
			$user = new iconbanModel;
            $user->b_name = $request->b_name;
            $user->save();
            $user_id = $user->icb_id; // this give us the last inserted record id
		}
		catch (\Exception $e) {
			return response()->json(['status'=>'exception', 'msg'=>$e->getMessage()]);
		}
		return response()->json(['status'=>"success", 'user_id'=>$user_id]);
	}
    public function storeimg(Request $request){
		if($request->file('file')){

            $img = $request->file('file');

            //here we are geeting userid alogn with an image
            $userid = $request->userid;

            $imageName = '/upload/brand/'.strtotime(now()).rand(11111,99999).'.'.$img->getClientOriginalExtension();
            $user_image = new iconbanModel();
            $original_name = $img->getClientOriginalName();
            $user_image->icon = $imageName;

            if(!is_dir(public_path() . '/upload/brand/')){
                mkdir(public_path() . '/upload/brand/', 0777, true);
            }

        $request->file('file')->move(public_path() . '/upload/brand/', $imageName);

        // we are updating our image column with the help of user id
        $user_image->where('icb_id', $userid)->update(['icon'=>$imageName]);

        return response()->json(['status'=>"success",'imgdata'=>$original_name,'userid'=>$userid]);
        }
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
