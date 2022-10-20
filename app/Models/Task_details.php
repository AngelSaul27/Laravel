<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'type',
        'priority',
        'status',
        'color_priority',
        'color_head',
    ];
}
