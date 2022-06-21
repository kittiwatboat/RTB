<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\visionModel;

class VisionController extends Controller
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
    public function vision(){
        $vision=visionModel::paginate(10);
        return view('backend.vision.index')->with('vision',$vision);
    }
    public function add(){
        return view('backend.vision.add');
    }
    public function addsub(Request $request){
        $vision=new visionModel;
        $vision->nameth=$request->nameth;
        $vision->nameen=$request->nameen;
        $vision->desth=$request->desth;
        $vision->desen=$request->desen;
        $vision->detailth=$request->detailth;
        $vision->detailen=$request->detailen;
        $filename = 'vision_img_' . date('dmY-His');
        $file = $request->vision_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->vision_img != null){
                //     Storage::disk('public')->delete($arti->vision_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/vision/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $vision->vision_img = $newLG;
            }
        }

        $filename2 = 'vision2_img_' . date('dmY-His');
        $file2 = $request->vision2_img;
        if($file2){ 
            $ima = $file2->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->vision2_img != null){
                //     Storage::disk('public')->delete($arti->vision2_img);
                // }                
            $lg = Image::make($file2->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/vision/' . $filename2 . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $vision->vision2_img = $newLG;
            }
        }

        $filename3 = 'vision3_img_' . date('dmY-His');
        $file3 = $request->vision3_img;
        if($file3){ 
            $ima = $file3->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->vision3_img != null){
                //     Storage::disk('public')->delete($arti->vision3_img);
                // }                
            $lg = Image::make($file3->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/vision/' . $filename3 . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $vision->vision3_img = $newLG;
            }
        }

        $vision->d1th=$request->d1th;
        $vision->d1en=$request->d1en;
        $vision->d2th=$request->d2th;
        $vision->d2en=$request->d2en;
        $vision->d3th=$request->d3th;
        $vision->d3en=$request->d3en;

        $vision->n1th=$request->n1th;
        $vision->n1en=$request->n1en;
        $vision->n2th=$request->n2th;
        $vision->n2en=$request->n2en;
        $vision->n3th=$request->n3th;
        $vision->n3en=$request->n3en;

        $vision->save();
        return redirect('/backoffice/vision');
    }
    public function edit($id){
        $vision=visionModel::find($id);
        return view('backend.vision.edit')->with('vision', $vision);
    }
    public function editsub(Request $request){
        $vision= visionModel::find($request->vision_id);
        $vision->nameth=$request->nameth;
        $vision->nameen=$request->nameen;
        $vision->desth=$request->desth;
        $vision->desen=$request->desen;
        $vision->detailth=$request->detailth;
        $vision->detailen=$request->detailen;
        $filename = 'vision_img_' . date('dmY-His');
        $file = $request->vision_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($vision->vision_img != null){
                    Storage::disk('public')->delete($vision->vision_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/vision/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $vision->vision_img = $newLG;
            }
        }

        $filename2 = 'vision2_img_' . date('dmY-His');
        $file2 = $request->vision2_img;
        if($file2){ 
            $ima = $file2->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->vision2_img != null){
                //     Storage::disk('public')->delete($arti->vision2_img);
                // }                
            $lg = Image::make($file2->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/vision/' . $filename2 . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $vision->vision2_img = $newLG;
            }
        }

        $filename3 = 'vision3_img_' . date('dmY-His');
        $file3 = $request->vision3_img;
        if($file3){ 
            $ima = $file3->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->vision3_img != null){
                //     Storage::disk('public')->delete($arti->vision3_img);
                // }                
            $lg = Image::make($file3->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/vision/' . $filename3 . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $vision->vision3_img = $newLG;
            }
        }

        $vision->d1th=$request->d1th;
        $vision->d1en=$request->d1en;
        $vision->d2th=$request->d2th;
        $vision->d2en=$request->d2en;
        $vision->d3th=$request->d3th;
        $vision->d3en=$request->d3en;

        $vision->n1th=$request->n1th;
        $vision->n1en=$request->n1en;
        $vision->n2th=$request->n2th;
        $vision->n2en=$request->n2en;
        $vision->n3th=$request->n3th;
        $vision->n3en=$request->n3en;
        
        $vision->save();
        return redirect()->back();
    }
    public function delete($id){
        $vision=visionModel::find($id);
        if($vision->vision_img != null){
            Storage::disk('public')->delete($vision->vision_img);
        }
        $a=visionModel::destroy($vision->vision_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
