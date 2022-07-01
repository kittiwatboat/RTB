<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class cat_newsModel extends Model

{

    protected $table = 'cat_news';
    protected $primaryKey = 'cat_news_id';

    protected $fillable = ['cat_news_id','nameth','nameen','created','updated'];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public $timestamp = false;

}

