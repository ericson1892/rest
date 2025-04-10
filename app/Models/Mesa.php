<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesas';

    protected $fillable = [
        'id_mesa',
        'numero',
        'disponibilidad'
    ];

    public $timestamps = false;
}
