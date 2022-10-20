<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    //Relación del modelo profiles con users
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //Relación del modelo profiles con profile_details
    public function pf_details()
    {
        return $this->hasOne('App\Models\Pf_details');
    }

    //Relación del modelo profiles con pf_segurities
    public function pf_segurity()
    {
        return $this->hasOne('App\Models\Pf_segurity');
    }
}
