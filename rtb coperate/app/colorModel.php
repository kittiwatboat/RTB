<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class colorModel extends Model

{

    protected $table = 'color';
    protected $primaryKey = 'c_id';

    protected $fillable = ['c_id','pro_id','colorname','colorcode','proimg','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

