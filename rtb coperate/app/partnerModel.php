<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class partnerModel extends Model

{

    protected $table = 'partner';
    protected $primaryKey = 'partner_id';

    protected $fillable = ['partner_id','solutiontype_id','partner_img','nameth','nameen','desth','desen','detailth','detailen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

