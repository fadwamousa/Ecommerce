<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\User;
use Auth;
use App\Order;

class CheckoutController extends Controller
{

  /*public function step1(){

    if(Auth::check()){

    return redirect()->route('checkout.shipping');
    }
    return redirect('login');
  }*/

  public function shipping(){

    return view('front.shipping_info');

  }

  public function payment(){
    return view('front.payments');
  }


  public function storePayment(Request $request)
     {
         // Set your secret key: remember to change this to your live secret key in production
     // See your keys here: https://dashboard.stripe.com/account/apikeys
         \Stripe\Stripe::setApiKey("sk_test_M8hfDnQwXx36Lm8qJ2zWjVDP");

 // Get the credit card details submitted by the form
         $token = $request->stripeToken;

 // Create a charge: this will charge the user's card
         try {
             $charge = \Stripe\Charge::create(array(
                 "amount" => Cart::total()*100, // Amount in cents
                 "currency" => "usd",
                 "source" => 'tok_visa',
                 "description" => "Example charge"
             ));

             //return redirect('/cart');
         } catch (\Stripe\Error\Card $e) {
             // The card has been declined
         }

         //create
         Order::createorder();


     }

}
