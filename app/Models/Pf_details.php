<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pf_details extends Model
{
    use HasFactory;

    //Relación del modelo pf_details con profiles
    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    //Relación del modelo pf_details con pf_addresses
    public function pf_address()
    {
        return $this->hasOne('App\Models\Pf_address');
    }

    //Relación del modelo pf_details con pf_social
    public function pf_social()
    {
        return $this->hasOne('App\Models\Pf_social');
    }
}
