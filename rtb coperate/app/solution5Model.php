<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class solution5Model extends Model

{

    protected $table = 'solution5';
    protected $primaryKey = 'solution5_id';

    protected $fillable = ['solution5_id','solution2_id','solution3_id','solution4_id','solutiontype_id','solution5_img','step','nameth','nameen','desth','desen','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

