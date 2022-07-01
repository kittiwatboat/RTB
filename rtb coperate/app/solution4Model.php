<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class solution4Model extends Model

{

    protected $table = 'solution4';
    protected $primaryKey = 'solution4_id';

    protected $fillable = ['solution4_id','id','solutiontype_id','solution2_id','solution3_id','solution4_img','nameth','nameen','desth','desen','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

