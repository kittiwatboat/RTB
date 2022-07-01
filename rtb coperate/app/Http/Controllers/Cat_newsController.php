<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\cat_newsModel;

class Cat_newsController extends Controller
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
    public function cat_news(){
        $cat_news=cat_newsModel::paginate(10);
        return view('backend.cat_news.index')->with('cat_news',$cat_news);
    }
    public function add(){
        return view('backend.cat_news.add');
    }
    public function addsub(Request $request){
        $cat_news=new cat_newsModel;
        $cat_news->nameth=$request->nameth;
        $cat_news->nameen=$request->nameen;
        $cat_news->save();
        return redirect('/backoffice/cat_news');
    }
    public function edit($id){
        $cat_news=cat_newsModel::find($id);
        return view('backend.cat_news.edit')->with('cat_news', $cat_news);
    }
    public function editsub(Request $request){
        $cat_news= cat_newsModel::find($request->cat_news_id);
        $cat_news->nameth=$request->nameth;
        $cat_news->nameen=$request->nameen;
        $cat_news->save();
        return redirect()->back();
    }
    public function delete($id){
        $cat_news=cat_newsModel::find($id);
        if($cat_news->cat_news_img != null){
            Storage::disk('public')->delete($cat_news->cat_news_img);
        }
        $a=cat_newsModel::destroy($cat_news->cat_news_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
