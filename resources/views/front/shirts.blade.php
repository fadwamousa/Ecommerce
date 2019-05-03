@extends('layouts.main')
@section('title','ShirtsPage')
@section('content')
<!doctype html>

        <!-- products listing -->
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
                      <img src="{{asset($shirt->image ?$shirt->image : 'http://i.imgur.com/Mcw06Yt.png')}}" alt="">
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
    @endif
</div>
@stop
