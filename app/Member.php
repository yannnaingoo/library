<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=['user_id','phone','address'];
      public function user($value='')
       {
       	return $this->belongsTo('App\User');
       }
}
