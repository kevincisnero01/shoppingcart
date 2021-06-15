<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $table = 'orders';

   protected $primaryKey = 'order_id';

   protected $fillable = [
   	'user_id',
   	'total',
   	'payment_method',
   	'date'
   ];

   public function user(){
   		return $this->belongsTo(User::class);
   }
}
