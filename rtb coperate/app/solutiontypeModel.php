<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class solutiontypeModel extends Model

{

    protected $table = 'solution_type';
    protected $primaryKey = 'solution_type_id';

    protected $fillable = ['solution_type_id','img','title_th','title_en','des_th','des_en','detail_th','detail_en','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

