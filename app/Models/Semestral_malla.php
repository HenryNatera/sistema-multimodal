<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestral_malla extends Model
{
    use HasFactory;

    public function pnf(){
        return $this->belongsTo('App\Models\Pnf');
    }
}
