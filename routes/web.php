<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'login'])->name("login");
Route::post('/login', [LoginController::class, 'logar']);
Route::get('/cadastrar', [LoginController::class, 'cadastro']);
Route::post('/cadastrar', [LoginController::class, 'cadastrar']);
Route::get('/menu', [NotasController::class, 'index'])->middleware('auth');
Route::get('/Deslogar', [LoginController::class, 'deslogar']);
Route::get('/criar-anotacao', [NotasController::class, 'criando']);
Route::post('/criar-anotacao', [NotasController::class, 'criar']);
Route::get('/minhas-anotacoes', [NotasController::class, 'show']);
Route::get('/nota/editar/{id}', [NotasController::class, 'editar']);
Route::post('/nota/editar/{id}', [NotasController::class, 'edit']);
Route::get('/nota/excluir/{id}', [NotasController::class, 'delete']);




