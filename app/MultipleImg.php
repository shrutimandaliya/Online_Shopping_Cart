<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultipleImg extends Model
{
    	protected $table = 'images';

		protected $fillable = [
       'product_id','image_name','sort_no','status'
    ];
    
}
