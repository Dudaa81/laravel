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

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])->name('principal'); 
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'index'])->name('sobre');
Route::get('/contato', [App\Http\Controllers\Contato::class, 'index'])->name('contato');
Route::get('/cursos', [App\Http\Controllers\Contato::class, 'adm'])->name('adm');
Route::get('/cursos', [App\Http\Controllers\Contato::class, 'ds'])->name('ds');





