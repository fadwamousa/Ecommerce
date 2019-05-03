@extends('layouts.main')
@section('title','shippingInfoPage')
@section('content')

<div class="row">

  <h3>Shipping Information</h3>

  {!!Form::open(['method'=>'POST','route'=>'address.store'])!!}

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

  {{ Form::submit('Proceed to Payment', array('class' => 'button success')) }}
  {!! Form::close() !!}
</div>


@if(count($errors))

  @foreach($errors->all() as $error)
  <div class="alert alert-danger">
    {{ $error }}
  </div>
  @endforeach

@endif
@stop
