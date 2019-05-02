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
      <td>{{ $cartItem->qty }}</td>
      <td>{{ $cartItem->price }}</td>
      <td>{{ $cartItem->options->has('size')?$cartItem->options->size:'' }}</td>
    </tr>
    @endforeach
  </tbody>

</table>
@stop
