<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class meet_typeModel extends Model

{

    protected $table = 'meet_type';
    protected $primaryKey = 'meet_type_id';

    protected $fillable = ['meet_type_id','solutiontype_id','meet_type_img','nameth','nameen','desth','desen','type','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

