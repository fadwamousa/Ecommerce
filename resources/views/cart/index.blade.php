@extends('layouts.main')
@section('content')
<h3>Cart Items</h3>
<table class="table table-hover">

  <thead>
    <tr>
      <th>name</th>
      <th>Qty</th>
      <th>price</th>
      <th>size</th>
    </tr>
  </thead>

  <tbody>
    @foreach($cartItems as $cartItem)
    <tr>
      <td>{{ $cartItem->name }}</td>

      <td width="50">
          {!!Form::model($cartItem,['method'=>'PATCH','action'=>['CartController@update',$cartItem->rowId]])!!}
             <input name="qty" type="text" value="{{ $cartItem->qty }}">
             <input type="submit" class="btn btn-default" value="OK">
          {!!Form::close()!!}
          {!!Form::model($cartItem,['method'=>'DELETE','action'=>['CartController@destroy',$cartItem->rowId]])!!}
             <input type="submit" class="btn btn-default" value="Delete">
          {!!Form::close()!!}



      </td>
      <td>{{ $cartItem->price }}</td>
      <td>{{ $cartItem->size?$cartItem->size:'' }}</td>
    </tr>
    @endforeach

   <tr>
    <td></td>
    <td>Count {{ Cart::count() }}</td>
    <td>Total Price ${{ Cart::total() }}</td>
  </tr>

  </tbody>

</table>
@stop
