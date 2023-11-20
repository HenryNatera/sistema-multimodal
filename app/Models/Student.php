<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function pnf(){
        return $this->belongsTo('App\Models\Pnf');
    }

    public function periodo(){
        return $this->belongsTo('App\Models\Periodo');
    }

    public function solicitudes_students(){
        return $this->hasMany('App\Models\SolicitudesStudent');
    }

    
}
