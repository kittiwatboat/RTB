<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class bannerModel extends Model

{

    protected $table = 'banner';
    protected $primaryKey = 'ban_id';

    protected $fillable = ['ban_id','img','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

