<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class solution3Model extends Model

{

    protected $table = 'solution3';
    protected $primaryKey = 'solution3_id';

    protected $fillable = ['solution3_id','solutiontype_id','solution2_id','solution3_img','nameth','nameen','desth','desen','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

