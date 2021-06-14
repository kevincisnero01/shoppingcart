<?php

namespace App;

use App\Cart;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $primaryKey = "id";

    protected $fillable = [
    	'name',
    	'description',
    	'price',
    	'quantity',
    	'size',
    	'image',
    	'status'
    ];

    public function cart(){
        return $this->hasMany(Cart::class);
    }

}
