<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LibroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/mascotas/dueno/{id}', [PersonaController::class, 'show']);
Route::get('/mascotas', [MascotaController::class, 'index']);

//obtener las categorias
Route::get('/v1/get/getAll', [CategoriaController::class, 'index']);

//obtener libros por categorias
Route::get('/v1/get/getLibros/{category_id}', [LibroController::class, 'index']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
