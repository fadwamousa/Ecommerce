@extends('admin.layout.admin')
@section('content')

<h3>Products</h3>



 <ul>
   @if(count($products) > 0)
   @foreach($products as $product)
   <li>
     <h4>Name-product :: {{ $product->name }}</h4>

   </li>
   @endforeach
   @else
   <h4>No Products Found here</h4>
   @endif
 </ul>

 {{ $products->render() }}

@stop
