<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineClases extends Model
{
    use HasFactory;

    public function regular()
    {
        return $this->belongsTo('App\Models\Regular');
    }
}
