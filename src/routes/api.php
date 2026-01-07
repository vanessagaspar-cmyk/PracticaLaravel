<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PonentesController;
use App\Http\Controllers\AsistentesController;

/**
 * Rutas para el recurso Evento
 */

//Recuperar todos los eventos
Route::get('/eventos',[EventoController::class,'index']);    

//Almacenar un evento nuevo
Route::post('/eventos',[EventoController::class,'store']);

//Recuperar un evento específico
Route::get('/eventos/{id}',[EventoController::class,'show']);

//Actualizar un evento específico
Route::put('/eventos/{id}',[EventoController::class,'update']);

//Eliminar un evento específico
Route::delete('/eventos/{id}',[EventoController::class,'destroy']);

/**
 * Rutas para el recurso Ponentes
 */

//Recuperar todos los ponentes
Route::get('/ponentes',[PonentesController::class,'index']);    

//Almacenar un ponente nuevo
Route::post('/ponentes',[PonentesController::class,'store']);

//Recuperar un ponente específico
Route::get('/ponentes/{id}',[PonentesController::class,'show']);

//Actualizar un ponente específico
Route::put('/ponentes/{id}',[PonentesController::class,'update']);

//Eliminar un ponente específico
Route::delete('/ponentes/{id}',[PonentesController::class,'destroy']);

/**
 * Rutas para el recurso Asistentes
 */

//Recuperar todos los asistentes
Route::get('/asistentes',[AsistentesController::class,'index']);    

//Almacenar un asistente nuevo
Route::post('/asistentes',[AsistentesController::class,'store']);

//Recuperar un asistente específico
Route::get('/asistentes/{id}',[AsistentesController::class,'show']);

//Actualizar un asistente específico
Route::put('/asistentes/{id}',[AsistentesController::class,'update']);

//Eliminar un asistente específico
Route::delete('/asistentes/{id}',[AsistentesController::class,'destroy']);