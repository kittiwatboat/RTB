<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class solution5Model extends Model

{

    protected $table = 'solution5';
    protected $primaryKey = 'solution5_id';

    protected $fillable = ['solution5_id','solution5_img','nameth','nameen','desth','desen','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

