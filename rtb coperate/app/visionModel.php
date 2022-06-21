<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class visionModel extends Model

{

    protected $table = 'vision';
    protected $primaryKey = 'vision_id';

    protected $fillable = ['vision_id','solutiontype_id','vision_img','nameth','nameen','desth','desen','detailth','detailen','vision2_img','vision3_img','d1th','d1en','d2th','d2en','d3th','d3en','n1th','n1en','n2th','n2en','n3th','n3en','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

