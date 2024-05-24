<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AlumnoController;

Route::get('/crear-relaciones', [AlumnoController::class, 'crearRelaciones']);
Route::get('/alumnos', [AlumnoController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
