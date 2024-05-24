<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Modulo;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function crearRelaciones()
    {
        
        $profesor = Profesor::create([
            'dni' => '12345678A',
            'nombre' => 'John Doe',
            'direccion' => '123 Main St',
            'tfno' => '123456789'
        ]);

        
        $modulo = Modulo::create([
            'nombre' => 'Math',
            'profesor_id' => $profesor->id
        ]);

       
        $alumno = Alumno::create([
            'expediente' => '20240001',
            'nombre' => 'Jane Smith',
            'apellidos' => 'Smith',
            'codigo' => 'S123456'
        ]);

        
        $alumno->modulos()->attach($modulo->id);

        
        $profesor->modulos; 
        $modulo->profesor; 
        $alumno->modulos;   
    }
}
