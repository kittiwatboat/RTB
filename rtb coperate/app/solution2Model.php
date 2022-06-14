<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class solution2Model extends Model

{

    protected $table = 'solution2';
    protected $primaryKey = 'solution2_id';

    protected $fillable = ['solution2_id','solutiontype_id','solution2_img','nameth','nameen','desth','desen','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

