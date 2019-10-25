<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $guarded = ['id'];
    
    public function staffs(){
        return $this->hasMany('App\Staff');
    }

    public function previousHotel(){
        return $this->belongsTo('App\PreviousHotel');
    }
}
