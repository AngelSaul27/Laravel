<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_read',
    ];

    /*Relación del modelo notifys con users*/
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
