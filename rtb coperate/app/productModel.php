<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class productModel extends Model

{

    protected $table = 'product';
    protected $primaryKey = 'pro_id';

    protected $fillable = ['pro_id','pro_nameth','pro_nameen','descriptionth','descriptionen','img','price','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

