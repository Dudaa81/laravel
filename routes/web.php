<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
Route::get('/contato', [App\Http\Controllers\Contato::class, 'contato']);
Route::get('/usuario', [App\Http\Controllers\Usuario::class, 'usuario']);
Route::get('/usuario/faltas', [App\Http\Controllers\Usuario::class, 'faltas']);
Route::get('/usuario/buscar', [App\Http\Controllers\Usuario::class, 'buscar']);




