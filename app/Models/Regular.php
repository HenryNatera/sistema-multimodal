<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regular extends Model
{
    use HasFactory;

    protected $fillable = ['regular_name', 'regular_turno', 'regular_modalidad', 'ragular_trayecto', 'regular_trimestre', 'regular_semestre', 'pnf_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function periodo(){
        return $this->belongsTo('App\Models\Periodo');
    }

    public function pnf(){
        return $this->belongsTo('App\Models\Pnf');
    }

    public function regularEvaluation(){
        return $this->hasMany('App\Models\RegularEvaluation');
    }

    public function regularHorarios(){
        return $this->hasMany('App\Models\RegularHorario');
    }


}
