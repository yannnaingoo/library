<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
     protected $fillable = ['name','author_id','category_id','price','photo','description'];

   
      public function category()
      {
      	return $this->belongsTo('App\Category');
      }

      public function author()
      {
      	return $this->belongsTo('App\Author');
      }

      public function qties()
      {
      	return $this->hasMany('App\Qty');
      }

        public function borrowdetail()
      {
            return $this->hasMany('App\Borrowdetail');
      }

}



