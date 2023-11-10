<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pnf extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function regulars(){
        return $this->hasMany('App\Models\Regular');
    }

    public function trimestral_mallas(){
        return $this->hasMany('App\Models\Trimestral_malla');
    }

    public function semestral_mallas(){
        return $this->hasMany('App\Models\Semestral_malla');
    }
    
}
