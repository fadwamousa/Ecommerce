@extends('layouts.main')
@section('title','shippingInfoPage')
@section('content')

<div class="row">

  <h3>Shipping Information</h3>

  <div class="row">


      {!!Form::open(['method'=>'POST','route'=>'payment.store','id'=>'payment-form'])!!}
        <div class="card-errors"></div>

        <div class="form-row">
          <label>
            <span>Card number</span>
            <input type="text" name="card_no" size="20" data-stripe="number">
          </label>
        </div>

        <div class="form-row">
          <label>
            <span>Expiration (MM/YY)</span>
            <input type="text" name="ccExpiryMonth" size="2" data-stripe="exp_month">
          </label>
          <span> / </span>
          <input type="text" name="ccExpiryYear" size="2" data-stripe="exp_year">
        </div>

        <div class="form-row">
          <label>
            <span>CVC</span>
            <input type="text" name="cvvNumber" size="4" data-stripe="cvc">
          </label>
        </div>



        <input type="submit" class="submit button success" value="Submit Payment">
  {!!Form::close()!!}


  </div>



</div>
@stop
