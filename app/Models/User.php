<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function professors(){
        return $this->hasMany('App\Models\Professor');
    }

    public function students(){
        return $this->hasMany('App\Models\Student');
    }

    public function acreditableEvaluation(){
        return $this->hasMany('App\Models\AcreditableEvaluation');
    }

    public function pnfs(){
        return $this->hasMany('App\Models\Pnf');
    }

    public function regulars(){
        return $this->hasMany('App\Models\Regular');
    }

    public function regular_horarios(){
        return $this->hasMany('App\Models\RegularHorarios');
    }

    public function solicitudes_students(){
        return $this->hasMany('App\Models\SolicitudesStudent');
    }

    public function noticias(){
        return $this->hasMany('App\Models\Noticia');
    }
    

}
