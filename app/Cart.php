<?php

namespace App;

use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "carts";

    protected $primaryKey ="id";

    protected $fillable = [
    	'user_id',
    	'product_id',
    	'price',
    	'quantity',
    ];


    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
