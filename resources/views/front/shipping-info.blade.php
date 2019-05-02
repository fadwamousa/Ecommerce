@extends('layouts.main')
@section('title','shippingInfoPage')
@section('content')

<div class="row">

  <h3>Shipping Information</h3>

  {!!Form::open(['method'=>'POST','action'=>'CheckoutController@shipping'])!!}

  <div class="form-group">
    {{ Form::label('addressline','AddressLine:') }}
    {{ Form::text('addressline',null,['class'=>'form-control']) }}
  </div>
  <div class="form-group">
    {{ Form::label('city','City:') }}
    {{ Form::text('city',null,['class'=>'form-control']) }}
  </div>
  <div class="form-group">
    {{ Form::label('state','State:') }}
    {{ Form::text('state',null,['class'=>'form-control']) }}
  </div>
  <div class="form-group">
    {{ Form::label('zip','Zip:') }}
    {{ Form::text('zip',null,['class'=>'form-control']) }}
  </div>
  <div class="form-group">
    {{ Form::label('country','Country:') }}
    {{ Form::text('country',null,['class'=>'form-control']) }}
  </div>

  <div class="form-group">
    {{ Form::label('phone','Phone:') }}
    {{ Form::text('phone',null,['class'=>'form-control']) }}
  </div>

  <div class="form-group">
    {{ Form::submit('Done',['class'=>'btn btn-primary']) }}
  </div>


  {!!Form::close()!!}

</div>

@stop
