<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class subcatagoryModel extends Model

{

    protected $table = 'subcatagory';
    protected $primaryKey = 'scat_id';

    protected $fillable = ['scat_id','nameth','nameen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

