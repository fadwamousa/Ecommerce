<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use App\Category;
class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }


    public function create()
    {   //lists is deprecated

        $categories = Category::pluck('name','id')->all();
        return view('admin.products.create')->with('categories',$categories);
    }

    public function store(CreateProductRequest $request)
    {
         $input = $request->all();
         $file  = $request->file('image');
         if($file){
           $fileName = $file->getClientOriginalName();
           $file->move('images',$fileName);
           $input['image'] = $fileName;
         }

         $products = Product::create($input);
         return redirect('admin');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
