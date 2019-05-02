@extends('layouts.main')
@section('title','HomePage')
@section('content')
<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <h2 >
        <strong>
            Hey! Welcome to MC- Mykey's Store
        </strong>
    </h2>
    <br>
    <a href="{{ url('/shirts') }}"><button class="button large">Check out My Shirts</button></a>
</section>
<br/>
<div class="subheader text-center">
     <h2>
    MyKey&rsquo;s Latest Shirts
</h2>
</div>

<!-- Latest SHirts -->
<div class="row">

    @if(count($shirts))
    @foreach($shirts as $shirt)
      <div class="small-3 columns">
          <div class="item-wrapper">
              <div class="img-wrapper">
                  <a href="{{ url('cart/'.$shirt->id.'/edit') }}" class="button expanded add-to-cart">
                      Add to Cart
                  </a>

                  <a href="{{ url('/shirt/'.$shirt->id) }}">
                    <img src="  {{ $shirt->image ? $shirt->image : 'image-placeholder-350x350' }}" alt="">
                   </a>

              </div>
              <a href="{{ url('/shirt/'.$shirt->id) }}">
                  <h3>
                      {{ $shirt->name}}
                  </h3>
              </a>
              <h5>
                  ${{ $shirt->price }}
              </h5>
              <p>
                  {{ $shirt->description }}
              </p>
          </div>
      </div>
    @endforeach
    {{ $shirts->render() }}
    @endif
</div>
<!-- Footer -->
<br>
@stop
