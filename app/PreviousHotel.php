<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreviousHotel extends Model
{
    protected $guarded = ['id'];

    public function hotel(){
       return $this->belongsTo('App\Hotel');
    }

    public function positions(){
       return $this->hasMany('App\Position');
    }

    public function staffs(){
       return  $this->hasMany('App\Staff');
    }
}
