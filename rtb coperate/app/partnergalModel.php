<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class partnergalModel extends Model

{

    protected $table = 'partnergal';
    protected $primaryKey = 'partnergal_id';

    protected $fillable = ['partnergal_id','solutiontype_id','partnergal_img','nameth','nameen','desth','desen','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

