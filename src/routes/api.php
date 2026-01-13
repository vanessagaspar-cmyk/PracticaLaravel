<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PonentesController;
use App\Http\Controllers\AsistentesController;

/**
 * Rutas públicas
 */

//Recuperar todos los eventos
Route::get('/eventos',[EventoController::class,'index']);    
//Recuperar un evento específico
Route::get('/eventos/{id}',[EventoController::class,'show']);
//Recuperar todos los ponentes
Route::get('/ponentes',[PonentesController::class,'index']);    
//Recuperar un ponente específico
Route::get('/ponentes/{id}',[PonentesController::class,'show']);


/**
 * Rutas privadas
 */
Route::middleware('auth:api')->group(function () {
    //Almacenar un evento nuevo
    Route::post('/eventos',[EventoController::class,'store']);
    //Actualizar un evento específico
    Route::put('/eventos/{id}',[EventoController::class,'update']);
    //Eliminar un evento específico
    Route::delete('/eventos/{id}',[EventoController::class,'destroy']);

    //Almacenar un ponente nuevo
    Route::post('/ponentes',[PonentesController::class,'store']);
    //Actualizar un ponente específico
    Route::put('/ponentes/{id}',[PonentesController::class,'update']);
    //Eliminar un ponente específico
    Route::delete('/ponentes/{id}',[PonentesController::class,'destroy']);

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
});
