<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class meet_headModel extends Model

{

    protected $table = 'meet_head';
    protected $primaryKey = 'meet_head_id';

    protected $fillable = ['meet_head_id','solutiontype_id','meet_head_img','nameth','nameen','desth','desen','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

