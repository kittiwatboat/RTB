<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class productstockModel extends Model
{
    protected $table = 'product_stock';
    protected $primaryKey = 'ps_id';
    protected $fillable = ['ps_id','pro_id','pro_nameth','pro_nameen','variation_combo','status','stock'
    ,'specialprice','specialprice_start','specialprice_end','price','priceco','sellerSKU','created','updated'];

    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

    public $timestamp = false;
}
