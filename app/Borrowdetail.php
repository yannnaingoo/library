<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Borrowdetail extends Model
{
     use SoftDeletes;
      protected $fillable=['code_no','book_id','borrow_id'];
       public function book($value='')
       {
       	return $this->belongsTo('App\Book');
       }

         public function borrow($value='')
       {
       	return $this->belongsTo('App\Borrow');
       }
}
