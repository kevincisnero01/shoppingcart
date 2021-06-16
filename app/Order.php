<?php

namespace App;

use App\Product;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $table = 'orders';

   protected $primaryKey = 'id';

   protected $fillable = [
   	'user_id',
    'quantity',
   	'total',
   	'method',
    'status',
   	'date'
   ];

   public function user(){
   		return $this->belongsTo(User::class);
   }

   public function products(){
        return $this->belongsToMany(Product::class)
        ->withPivot('id', 'quantity', 'price')
        ->withTimestamps();
    }
}
