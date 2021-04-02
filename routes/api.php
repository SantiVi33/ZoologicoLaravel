<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIcontroller;
use App\Http\Controllers\Auth\RegisterController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/DatosAnimales',[APIcontroller::class, 'VerAnimales']);

Route::get('/DatosAnimales/{id}',[APIcontroller::class, 'VerAnimal']);

Route::post('/DatosAnimales',[APIcontroller::class, 'AgregarAnimal']);

Route::delete('/DatosAnimales/{id}',[APIcontroller::class, 'EliminarAnimal']);

Route::get('/DatosPersonal',[APIcontroller::class, 'VerPersonal']); 

Route::post('/DatosPersonal',[APIcontroller::class, 'AgregarPersona']);

Route::get('/DatosUsuarios',[APIcontroller::class, 'VerUsuarios']);

Route::post('/DatosUsuarios',[APIcontroller::class, 'AgregarUsuario']);

Route::post('/DatosUsuarios/login',[APIcontroller::class, 'login']);

