<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class meet_bodyModel extends Model

{

    protected $table = 'meet_body';
    protected $primaryKey = 'meet_body_id';

    protected $fillable = ['meet_body_id','solutiontype_id','meet_body_img','nameth','nameen','desth','desen','type','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

