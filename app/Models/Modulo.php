<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'profesor_id'];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }
}