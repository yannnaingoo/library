<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
        protected $fillable = ['user_id','borrow_date','code_no','status'];
        
       public function user($value='')
       {
       	return $this->belongsTo('App\User');
       }
}
