<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pf_segurity extends Model
{
    use HasFactory;

    //Relación del modelo pf_segurities con profiles
    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }
}
