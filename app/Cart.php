<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "shoppingcarts";

    protected $primaryKey ="id";

    protected $fillable = [
    	'user_id',
    	'product_id',
    	'price',
    	'quantity',
    ];
}
