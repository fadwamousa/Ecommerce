@extends('layouts.main')
@section('title','ShirtPage')
@section('content')
<!doctype html>

<!-- products listing -->
 <!-- Latest SHirts -->
 <div class="row">
     <div class="small-5 small-offset-1 columns">
         <div class="item-wrapper">
             <div class="img-wrapper">
                 <a href="#">
                    <img src="{{ asset($shirt->image ? $shirt->image : 'http://i.imgur.com/Mcw06Yt.png') }}" alt="">

                </a>
             </div>
         </div>
     </div>
     <div class="small-6 columns">
         <div class="item-wrapper">
             <h3 class="subheader">
                <span class="price-tag">${{ $shirt->price }}</span>Fadwa Designed
             </h3>
             <div class="row">
                 <div class="large-12 columns">
                     <label>
                         Select Size
                         <select>
                             <option value="small">
                                 Small
                             </option>
                             <option value="medium">
                                 Medium
                             </option>
                             <option value="large">
                                 Large
                             </option>

                         </select>
                     </label>
                    <a href="{{ url('cart/'.$shirt->id.'/edit') }}" class="button expanded add-to-cart">
                       Add to Cart</a>
                 </div>
             </div>
         <p class="text-left subheader"><small>* Designed by Fadwa</small></p>

         </div>
     </div>
 </div>
</div>
@stop
