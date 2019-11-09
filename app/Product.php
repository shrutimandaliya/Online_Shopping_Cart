<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

        protected $fillable = [
       'product_name','ram','battery','processor','product_description','product_price','product_quantity','thumbnail','upc','status','color_id','category_id'
    ];
}
