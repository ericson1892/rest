<?php

namespace App\Models;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    protected $table = 'platillos';

    protected $fillable = [
        'id_platillo',
        'nombre',
        'precio',
        'id_categoria'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }

    public $timestamps = false;
}
