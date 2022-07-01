<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class cat_inModel extends Model

{

    protected $table = 'cat_in';
    protected $primaryKey = 'cat_in_id';

    protected $fillable = ['cat_in_id','nameth','nameen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

