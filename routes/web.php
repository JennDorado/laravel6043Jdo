<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/pepe', function () {
    return ('hola chic@s...');
});

Route::get('/curso/{dato1}',[CursoController::class,'esPrimo']);
Route::get('/jenn/{dato1}/{dato2}',[CursoController::class,'Amigos']);
