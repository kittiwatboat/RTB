<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\catagoryModel;
use App\subcatagoryModel;
use App\producttypeModel;
use App\productModel;
use App\colorModel;
use App\albumcolorModel;
class ProductController extends Controller
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
    public function protype(){
        $scat=subcatagoryModel::get();
        $protype=producttypeModel::join('subcatagory','subcatagory.scat_id','=','producttype.scat_id')
        ->join('catagory','catagory.cat_id','=','producttype.cat_id')
        ->select('catagory.*','subcatagory.*','producttype.*')
        ->paginate(10);
        return view('backend.product.typeproduct.index')->with('protype',$protype);
    }
    public function typeadd(){
        $cat=catagoryModel::get();
        $scat=subcatagoryModel::get();
        return view('backend.product.typeproduct.add')->with('scat',$scat)->with('cat',$cat);
    }
    public function typeaddsub(Request $request){
        $scat=subcatagoryModel::find($request->scat_id);
        // dd($scat->cat_id);
        $protype=new producttypeModel;
        $protype->scat_id = $request->scat_id;
        $protype->cat_id = $scat->cat_id;
        $protype->typenameth=$request->typenameth;
        $protype->typenameen=$request->typenameen;
        $filename = 'type_img_' . date('dmY-His');
        $file = $request->type_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->type_img != null){
                //     Storage::disk('public')->delete($arti->type_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/product/type/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $protype->type_img = $newLG;
            }
        }
        $protype->save();
        return redirect("/backoffice/product type");

    }
    public function typeedit($id){
        $protype=producttypeModel::find($id);
        $scat=subcatagoryModel::get();
        $cat=catagoryModel::get();
        return view('backend.product.typeproduct.edit')->with('protype',$protype)->with('scat',$scat)->with('cat',$cat);
    }
    public function typeeditsub(Request $request){
        $scat=subcatagoryModel::find($request->scat_id);
        // dd($scat->cat_id);
        $protype= producttypeModel::find($request->pt_id);
        $protype->scat_id = $request->scat_id;
        $protype->cat_id = $scat->cat_id;
        $protype->typenameth=$request->typenameth;
        $protype->typenameen=$request->typenameen;
        $filename = 'type_img_' . date('dmY-His');
        $file = $request->type_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($protype->type_img != null){
                    Storage::disk('public')->delete($protype->type_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/product/type/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $protype->type_img = $newLG;
            }
        }
        $protype->save();

        return redirect()->back();

    }
    public function typedelete($id){
        $protype=producttypeModel::find($id);
        if($protype->type_img != null){
            Storage::disk('public')->delete($protype->type_img);
        }
        $a=producttypeModel::destroy($protype->pt_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }

    public function pro(){

        $pro=productModel::join("producttype",'producttype.pt_id','=','product.pt_id')
        ->select('product.*','producttype.*')
        ->paginate(10);
        // dd($pro);
        return view('backend.product.product.index')->with('pro',$pro);
    }
    public function add(){
        $type=producttypeModel::get();
        $scat=subcatagoryModel::get();
        return view('backend.product.product.add')->with('type',$type)->with('scat',$scat);
    }
    public function addsub(Request $request){
        $pro=new productModel;
        $pro->pt_id=$request->pt_id;
        $pro->pro_nameth=$request->pro_nameth;
        $pro->pro_nameen=$request->pro_nameen;
        $pro->descriptionth=$request->descriptionth;
        $pro->descriptionen=$request->descriptionen;
        $pro->price=$request->price;
        $filename = 'img_' . date('dmY-His');
        $file = $request->img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($pro->img != null){
                //     Storage::disk('public')->delete($pro->img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/product/type/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $pro->img = $newLG;
            }
        }
        $pro->save();
        return redirect('/backoffice/product');
        
    }
    public function edit($id){
        $pro=productModel::find($id);
        $type=producttypeModel::get();
        $scat=subcatagoryModel::get();
        return view('backend.product.product.edit')->with('type',$type)->with('scat',$scat)->with('pro',$pro);
    }
    public function editsub(Request $request){
        
        $pro= productModel::find($request->pro_id);
        $pro->pt_id=$request->pt_id;
        $pro->pro_nameth=$request->pro_nameth;
        $pro->pro_nameen=$request->pro_nameen;
        $pro->descriptionth=$request->descriptionth;
        $pro->descriptionen=$request->descriptionen;
        $pro->price=$request->price;
        $filename = 'img_' . date('dmY-His');
        $file = $request->img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($pro->img != null){
                    Storage::disk('public')->delete($pro->img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/product/type/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $pro->img = $newLG;
            }
        }
        $pro->save();
        return redirect()->back();
        
    }
    public function color($id){
        $pro=productModel::find($id);
        $color=colorModel::paginate(10);
        return view('backend.product.product.color.index')->with('pro',$pro)->with('color',$color);
    }
    public function addcolor($id){
        $pro=productModel::find($id);
        return view('backend.product.product.color.add')->with('pro',$pro);
    }
    public function addcolorsub(Request $request){
        $color=new colorModel;
        $color->pro_id=$request->pro_id;
        $color->colorname=$request->colorname;
        $color->colorcode=$request->colorcode;
        $filename = 'proimg_' . date('dmY-His');
        $file = $request->proimg;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($color->proimg != null){
                //     Storage::disk('public')->delete($color->proimg);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/product/color/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $color->proimg = $newLG;
            }
        }
        $color->save();
        return redirect("/backoffice/product/color/$color->pro_id");
    }
    public function editcolor($id){
        $color=colorModel::find($id);
        return view('backend.product.product.color.edit')->with('color',$color);
    }
    public function editcolorsub(Request $request){
        $color=colorModel::find($request->c_id);
        $color->pro_id=$request->pro_id;
        $color->colorname=$request->colorname;
        $color->colorcode=$request->colorcode;
        $filename = 'proimg_' . date('dmY-His');
        $file = $request->proimg;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($color->proimg != null){
                    Storage::disk('public')->delete($color->proimg);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/product/color/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $color->proimg = $newLG;
            }
        }
        $color->save();
        return redirect()->back();
    }
    public function deletecolor($id){
        $color=colorModel::find($id);
        if($color->proimg != null){
            Storage::disk('public')->delete($color->proimg);
        }
        $a=colorModel::destroy($color->c_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
    public function alcolor($id){
        $color=colorModel::find($id);
        $album=albumcolorModel::paginate(10);
        return view('backend.product.product.color.album.index')->with('color',$color)->with('album',$album);
    }

    public function alcolor_addsub(Request $request){
        $album = new albumcolorModel;
        $album->c_id = $request->c_id;
        $filename = 'al_img_' . date('dmY-His');
        $file = $request->al_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($album->al_img != null){
                    Storage::disk('public')->delete($album->al_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/product/album/color/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $album->al_img = $newLG;
            }
        }
        $album->save();
        return redirect()->back();
    }
    public function deletealbum($id){
        $album=albumcolorModel::find($id);
        if($album->al_img != null){
            Storage::disk('public')->delete($album->al_img);
        }
        $a=albumcolorModel::destroy($album->ac_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }

}
