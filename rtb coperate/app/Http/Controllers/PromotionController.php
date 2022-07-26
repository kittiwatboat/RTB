<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\promotionModel;
class promotionController extends Controller
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
    public function promotion(){
        $promotion=promotionModel::paginate(10);
        return view('backend.promotion.index')->with('promotion',$promotion);
    }
    public function add(){
        return view('backend.promotion.add');
    }
    public function addsub(Request $request){
        $promotion=new promotionModel;

        // $promotion->id=$request->promotion_id;

        $promotion->low_price=$request->low_price;

        $promotion->date_start=$request->date_start;
        $promotion->date_end=$request->date_end;

        $promotion->nameen=$request->nameen;
        $promotion->nameth=$request->nameth;

        $promotion->type=$request->type;
        $promotion->code=$request->code;
        $promotion->price_minus=$request->price_minus;
        // $filename = 'promotion_img_' . date('dmY-His');
        // $file = $request->promotion_img;
        // if($file){ 
        //     $ima = $file->getClientOriginalExtension();
        //     if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
        //         // if($arti->promotion_img != null){
        //         //     Storage::disk('public')->delete($arti->promotion_img);
        //         // }                
        //     $lg = Image::make($file->getRealPath());
        //     $ext = explode("/", $lg->mime())[1];
        //     $size = $this->imageSize();
        //     $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
        //     $newLG = 'upload/promotion/' . $filename . '.' . $ext;
        //     $store = Storage::disk('public')->put($newLG, $lg);
        //     $promotion->promotion_img = $newLG;
        //     }
        // }
        $promotion->save();
        return redirect('/backoffice/promotion');
    }
    public function edit($id){
        $promotion=promotionModel::find($id);
        return view('backend.promotion.edit')->with('promotion', $promotion);
    }
    public function editsub(Request $request){
        $promotion= promotionModel::find($request->promotion_id);

        $promotion->low_price=$request->low_price;
        
        $promotion->nameen=$request->nameen;
        $promotion->nameth=$request->nameth;

        $promotion->date_start=$request->date_start;
        $promotion->date_end=$request->date_end;

     
        $promotion->type=$request->type;
        $promotion->code=$request->code;
        $promotion->price_minus=$request->price_minus;
        // $filename = 'promotion_img_' . date('dmY-His');
        // $file = $request->promotion_img;
        // if($file){ 
        //     $ima = $file->getClientOriginalExtension();
        //     if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
        //         if($promotion->promotion_img != null){
        //             Storage::disk('public')->delete($promotion->promotion_img);
        //         }                
        //     $lg = Image::make($file->getRealPath());
        //     $ext = explode("/", $lg->mime())[1];
        //     $size = $this->imageSize();
        //     $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
        //     $newLG = 'upload/promotion/' . $filename . '.' . $ext;
        //     $store = Storage::disk('public')->put($newLG, $lg);
        //     $promotion->promotion_img = $newLG;
        //     }
        // }
        $promotion->save();
        return redirect()->back();
    }
    public function delete($id){
        $promotion=promotionModel::find($id);
        // if($promotion->promotion_img != null){
        //     Storage::disk('public')->delete($promotion->promotion_img);
        // }
        $a=promotionModel::destroy($promotion->id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
