<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class catagoryModel extends Model

{

    protected $table = 'catagory';
    protected $primaryKey = 'cat_id';

    protected $fillable = ['cat_id','nameth','nameen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

