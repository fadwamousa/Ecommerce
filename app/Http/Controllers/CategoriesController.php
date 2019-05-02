<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required|unique:categories']);
        $input = $request->all();
        $categories = Category::create($input);
        return redirect()->back();
    }

    public function show($id)
    {
      $products   = Category::find($id)->products;
      $categories = Category::all();
      return view('admin.categories.show',compact('categories','products'));
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
