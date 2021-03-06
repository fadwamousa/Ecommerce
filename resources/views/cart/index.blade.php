@extends('layouts.main')
@section('title','CartPage')
@section('content')

<div class="row">

  <h3>Cart Items</h3>
  <table class="table table-hover">

    <thead>
      <tr>
        <th>name</th>
        <th>Qty</th>
        <th>size</th>
        <th>price</th>
        <th>Action</th>
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

        </td>

        <td>

          {{ Form::select('size',['small'=>'Small','Meduim'=>'Meduim','large'=>'Large'],$cartItem->size) }}

          {!!Form::close()!!}
        </td>
        <td>{{ $cartItem->price }}</td>
        <td>
          {!!Form::model($cartItem,['method'=>'DELETE','action'=>['CartController@destroy',$cartItem->rowId]])!!}
           <input type="submit" class="btn btn-danger" value="Delete">
        {!!Form::close()!!}
      </td>
      </tr>
      @endforeach

     <tr>
      <td></td>
      <td>Count {{ Cart::count() }}</td>
      <td>
        Tax ${{ Cart::tax() }} <br/>
        Sub Total Price ${{ Cart::subtotal() }} <br>
        Grand Total Price ${{ Cart::total() }}
      </td>
      <td></td>
      <td></td>
    </tr>

    </tbody>

  </table>

  <a href="{{ route('checkout.shipping') }}" class="button">CheckOut</a>

</div>

@stop
