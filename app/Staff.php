<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded = ['id'];

    public function hotel(){
        return $this->belongsTo('App\Hotel');
    }
    
    public function position(){
        return $this->belongsTo('App\Position');
    }

    public function previousHotel(){
        return $this->belongsTo('App\PreviousHotel');
    }
}
