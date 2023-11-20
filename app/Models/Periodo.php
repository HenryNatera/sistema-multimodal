<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    public function regulares(){
        return $this->hasMany('App\Models\Regular');
    }

    public function students(){
        return $this->hasMany('App\Models\Student');
    }
}
