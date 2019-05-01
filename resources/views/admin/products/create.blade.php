@extends('admin.layout.admin')
@section('content')

<h3>Add New Product</h3>

<div class="row">

  <div class="col-md-8 col-md-offset-3">

    {!!Form::open(['method'=>'POST','action'=>'ProductsController@store','files'=>true])!!}
    <div class="form-group">

      {{ Form::label('name','Name') }}
      {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Name']) }}

    </div>

    <div class="form-group">

      {{ Form::label('description','Description') }}
      {{ Form::text('description',null,['class'=>'form-control','placeholder'=>'Enter description']) }}

    </div>

    <div class="form-group">

      {{ Form::label('size','Size::') }}
      {{ Form::select('size',[''=>'Choose Size','Small'=>'Small','medium'=>'medium','Large'=>'Large'],null,['class'=>'form-control']) }}

    </div>
    <div class="form-group">

      {{ Form::label('price','price::') }}
      {{ Form::text('price',null,['class'=>'form-control']) }}

    </div>
    <div class="form-group">


      {{ Form::file('image',['class'=>'form-control']) }}

    </div>
    <div class="form-group">


      {{ Form::select('category_id',[''=>'Choose An Option']+$categories,null,['class'=>'form-control']) }}

    </div>
    <div class="form-group">


      {{ Form::submit('create',['class'=>'btn btn-primary']) }}

    </div>
    {!!Form::close()!!}


  </div>


</div>

@stop
