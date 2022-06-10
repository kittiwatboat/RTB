<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class solutiontypeModel extends Model

{

    protected $table = 'solutiontype';
    protected $primaryKey = 'solutiontype_id';

    protected $fillable = ['solutiontype_id','solutiontype_img','nameth','nameen','desth','desen','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

