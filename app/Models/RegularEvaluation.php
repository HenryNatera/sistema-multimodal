<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularEvaluation extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function regular(){
        return $this->belongsTo('App\Models\Regular');
    }
}
