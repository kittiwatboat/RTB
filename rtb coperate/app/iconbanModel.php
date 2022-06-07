<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class iconbanModel extends Model

{

    protected $table = 'iconban';
    protected $primaryKey = 'icb_id';

    protected $fillable = ['icb_id','icon','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

