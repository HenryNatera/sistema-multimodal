<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acreditable extends Model
{
    use HasFactory;

    public function acreditableEvaluation(){
        return $this->hasMany('App\Models\AcreditableEvaluation');
    }

}
