<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\User;
use App\Order;


class Order extends Model
{
    protected $fillable = ['total','delivered'];

    public function ordersItems(){

      return $this->belongsToMany(Product::class)->withPivot('qty','total');

    }

    

    public function user(){
      return $this->belongsTo(User::class);
    }

    public static  function createorder(){

      //create order

      $user  = Auth::user();
      $order = $user->orders()->create([
        'total'     => Cart::total(),
        'delivered' => 0
      ]);

      //manage order

      $cartItems = Cart::content();
      foreach ($cartItems as $cartItem) {
        $order->ordersItems()->attach($cartItem->id,
        [
          'qty'   => $cartItem->qty,
          'total' => $cartItem->qty*$cartItem->price
      ]);
      }
    }
}
