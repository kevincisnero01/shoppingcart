<?php

namespace App;

use App\Order;
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

    public function orders(){
        return $this->belongsToMany(Order::class)
        ->withPivot('id', 'quantity', 'price')
        ->withTimestamps();
    }

}
