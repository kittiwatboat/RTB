<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\newsModel;
class NewsController extends Controller
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
    public function news(){
        $news=newsModel::paginate(10);
        return view('backend.news.index')->with('news',$news);
    }
    public function add(){
        return view('backend.news.add');
    }
    public function addsub(Request $request){
        $news=new newsModel;

        $news->cat_id=$request->cat_id;

        $dd = date('d', strtotime($request->date));
        $ff = date('Y', strtotime($request->date));
        $ii = date('m', strtotime($request->date));

        if($ii==1){$ii="มกราคม"; $ei="January";
        }
        elseif($ii==2){$ii="กุมภาพันธ์"; $ei="February";
        }  
        elseif($ii==3){$ii="มีนาคม"; $ei="March";
        }  
        elseif($ii==4){$ii="เมษายน"; $ei="April";
        }  
        elseif($ii==5){$ii="พฤษภาคม"; $ei="May";
        }
        elseif($ii==6){$ii="มิถุนายน"; $ei="June";
        }  
        elseif($ii==7){$ii="กรกฎาคม"; $ei="July";
        }  
        elseif($ii==8){$ii="สิงหาคม"; $ei="August";
        }  
        elseif($ii==9){$ii="กันยายน"; $ei="September";
        }  
        elseif($ii==10){$ii="ตุลาคม"; $ei="October";
        }  
        elseif($ii==11){$ii="พฤศจิกายน"; $ei="November";
        } 
        else{$ii="ธันวาคม"; $ei="December";
        }

        $news->date=$request->date;
        $news->dateth=$dd.' '.$ii.' '.$ff;
        $news->dateen=$dd.' '.$ei.' '.$ff;

        $news->desth=$request->desth;
        $news->desen=$request->desen;

        $news->nameth=$request->nameth;
        $news->nameen=$request->nameen;
        $news->detailth=$request->detailth;
        $news->detailen=$request->detailen;
        $filename = 'news_img_' . date('dmY-His');
        $file = $request->news_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                // if($arti->news_img != null){
                //     Storage::disk('public')->delete($arti->news_img);
                // }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/news/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $news->news_img = $newLG;
            }
        }
        $news->save();
        return redirect('/backoffice/news');
    }
    public function edit($id){
        $news=newsModel::find($id);
        return view('backend.news.edit')->with('news', $news);
    }
    public function editsub(Request $request){
        $news= newsModel::find($request->news_id);

        $news->cat_id=$request->cat_id;

        $dd = date('d', strtotime($request->date));
        $ff = date('Y', strtotime($request->date));
        $ii = date('m', strtotime($request->date));

        if($ii==1){$ii="มกราคม"; $ei="January";
        }
        elseif($ii==2){$ii="กุมภาพันธ์"; $ei="February";
        }  
        elseif($ii==3){$ii="มีนาคม"; $ei="March";
        }  
        elseif($ii==4){$ii="เมษายน"; $ei="April";
        }  
        elseif($ii==5){$ii="พฤษภาคม"; $ei="May";
        }
        elseif($ii==6){$ii="มิถุนายน"; $ei="June";
        }  
        elseif($ii==7){$ii="กรกฎาคม"; $ei="July";
        }  
        elseif($ii==8){$ii="สิงหาคม"; $ei="August";
        }  
        elseif($ii==9){$ii="กันยายน"; $ei="September";
        }  
        elseif($ii==10){$ii="ตุลาคม"; $ei="October";
        }  
        elseif($ii==11){$ii="พฤศจิกายน"; $ei="November";
        } 
        else{$ii="ธันวาคม"; $ei="December";
        }

        $news->date=$request->date;
        $news->dateth=$dd.' '.$ii.' '.$ff;
        $news->dateen=$dd.' '.$ei.' '.$ff;

        $news->desth=$request->desth;
        $news->desen=$request->desen;

        $news->nameth=$request->nameth;
        $news->nameen=$request->nameen;
        $news->detailth=$request->detailth;
        $news->detailen=$request->detailen;
        $filename = 'news_img_' . date('dmY-His');
        $file = $request->news_img;
        if($file){ 
            $ima = $file->getClientOriginalExtension();
            if($ima=='png' || $ima=='jpg'|| $ima=='jpeg'){ 
                if($news->news_img != null){
                    Storage::disk('public')->delete($news->news_img);
                }                
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $size = $this->imageSize();
            $lg->resize($size['cover']['lg']['x'], $size['cover']['lg']['y'])->stream();
            $newLG = 'upload/news/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            $news->news_img = $newLG;
            }
        }
        $news->save();
        return redirect()->back();
    }
    public function delete($id){
        $news=newsModel::find($id);
        if($news->news_img != null){
            Storage::disk('public')->delete($news->news_img);
        }
        $a=newsModel::destroy($news->news_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
