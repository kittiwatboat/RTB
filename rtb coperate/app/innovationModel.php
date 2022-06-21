<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class innovationModel extends Model

{

    protected $table = 'innovation';
    protected $primaryKey = 'in_id';

    protected $fillable = ['in_id','in_nameth','in_nameen','in_detailth','in_detailen','in_descriptionth','in_descriptionen','in_img','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

