<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class albumcolorModel extends Model

{

    protected $table = 'album_color';
    protected $primaryKey = 'ac_id';

    protected $fillable = ['ac_id','c_id','al_img','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

