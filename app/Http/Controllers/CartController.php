<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
class CartController extends Controller
{

    public function index()
    {
        $cartItems = Cart::content();
        return view('cart.index')->with('cartItems',$cartItems);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
      $product = Product::findOrFail($id);
      Cart::add($id,$product->name,1,$product->price,['size' => 'medium']);
      return back();
    }


    public function additem($id)
    {
      $product = Product::findOrFail($id);
      Cart::add($id,$product->name,1,$product->price,['size' => 'medium']);
      return back();
    }

    public function update(Request $request, $id)
    {
        Cart::update($id,['qty'=>$request->qty,'size'=>$request->size]);
        return back();
    }


    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
