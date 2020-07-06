<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qty extends Model
{
    protected $fillable = ['book_id','qty'];
     public function book($value='')
       {
       	return $this->belongsTo('App\Qty');
       }
}
