<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pf_social extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook',
        'twitter',
        'instagram',
        'github',
    ];

    //Relación del modelo pf_social con profile_details
    public function pf_details()
    {
        return $this->belongsTo('App\Models\Pf_details');
    }
}
