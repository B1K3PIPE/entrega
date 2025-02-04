<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['expediente', 'nombre', 'apellidos', 'codigo'];

    public function modulos()
    {
        return $this->belongsToMany(Modulo::class);
    }
}