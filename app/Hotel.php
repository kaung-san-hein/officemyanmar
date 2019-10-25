<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = ['id'];

    public function staffs(){
        return $this->hasMany('App\Staff');
    }

    public function previousHotel(){
        return $this->belongsTo('App\PreviousHotel');
    }
}
