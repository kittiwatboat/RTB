<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\workModel;

class WorkController extends Controller
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
    public function work(){
        $work=workModel::paginate();
        return view('backend.work.index',[
            'work'=>$work
        ]);
    }
    public function add(){
        return view('backend.work.add');
    }
    public function addsub(Request $re){
        $work=new workModel;
        $work->job_nameth=$re->job_nameth;
        $work->job_nameen=$re->job_nameen;
        $work->descriptionth=$re->descriptionth;
        $work->descriptionen=$re->descriptionen;
        $work->applicantth=$re->applicantth;
        $work->applicanten=$re->applicanten;
        $work->save();
        return redirect("/backoffice/work");

    }
    public function edit($id){
        $work=workModel::find($id);
        return view('backend.work.edit')->with('work',$work);
    }
    public function editsub(Request $re){
        $work=workModel::find($re->w_id);
        $work->job_nameth=$re->job_nameth;
        $work->job_nameen=$re->job_nameen;
        $work->descriptionth=$re->descriptionth;
        $work->descriptionen=$re->descriptionen;
        $work->applicantth=$re->applicantth;
        $work->applicanten=$re->applicanten;
        $work->save();
        return redirect()->back();

    }
    public function delete($id){
        $ban=workModel::find($id);
        $a=workModel::destroy($ban->w_id);
        if($a){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
