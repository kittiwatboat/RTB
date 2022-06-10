<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class solution3Model extends Model

{

    protected $table = 'solution3';
    protected $primaryKey = 'solution3_id';

    protected $fillable = ['solution3_id','img','title_th','title_en','des_th','des_en','detail_th','detail_en','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

