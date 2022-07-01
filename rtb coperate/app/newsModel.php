<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class newsModel extends Model

{

    protected $table = 'news';
    protected $primaryKey = 'news_id';

    protected $fillable = ['news_id','nameth','nameen','detailth','detailen','desth','desen','news_img','cat_id','date','dateth','dateen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

