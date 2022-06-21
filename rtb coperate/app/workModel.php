<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class workModel extends Model

{

    protected $table = 'work';
    protected $primaryKey = 'w_id';

    protected $fillable = ['w_id','job_nameth','job_nameen','descriptionth','descriptionen','applicantth','applicanten','status','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

