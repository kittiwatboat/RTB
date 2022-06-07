<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class producttypeModel extends Model

{

    protected $table = 'producttype';
    protected $primaryKey = 'pt_id';

    protected $fillable = ['pt_id','cat_id','scat_id','typenameth','typenameen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

