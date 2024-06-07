<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitucionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/instituciones', [InstitucionController::class, 'index']); // muestra todos los registros
Route::get('/instituciones/{id}', [InstitucionController::class, 'show']); // muestra un registro en especifico
Route::post('/instituciones', [InstitucionController::class, 'create']); // enviar la data y almacena el registro
Route::put('/instituciones/{id}', [InstitucionController::class, 'update']); // actualizar un registro en especial 
Route::delete('/instituciones/{id}', [InstitucionController::class, 'delete']); // elimina un registro en especial