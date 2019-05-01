<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class frontController extends Controller
{
    public function index(){
      $shirts = Product::paginate(4);
      return view('front.home',compact('shirts'));
    }

    public function shirts(){
      $shirts = Product::all();
      return view('front.shirts',compact('shirts'));
    }

    public function shirt($id)
    {
       $shirt = Product::findOrFail($id);
       //$sizes = Product::pluck('size')->all();
       return view('front.shirt',compact('shirt'));
    }
}
