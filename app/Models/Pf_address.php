<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pf_address extends Model
{
    use HasFactory;

    //Relación del modelo pf_addresses con profiles_details
    public function pf_details()
    {
        return $this->belongsTo('App\Models\Pf_details');
    }
}
