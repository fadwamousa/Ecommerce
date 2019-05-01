<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','size','image','category_id','price'];

    public function category(){

      return $this->belongsTo(Category::class);
    }

    public $uploads = "/images/";

    public function getImageAttribute($photo){
      return $this->uploads.$photo;
    }
}
