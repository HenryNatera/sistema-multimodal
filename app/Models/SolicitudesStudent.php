<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudesStudent extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function pnf(){
        return $this->belongsTo('App\Models\Pnf');
    }

    public function student(){
        return $this->belongsTo('App\Models\Student');
    }
}
