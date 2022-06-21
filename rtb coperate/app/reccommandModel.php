<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class reccommandModel extends Model

{

    protected $table = 'reccommand';
    protected $primaryKey = 'rec_id';

    protected $fillable = ['rec_id','scat_id','pt_id','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

