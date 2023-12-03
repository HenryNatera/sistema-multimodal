<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = ['url'];
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
