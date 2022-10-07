<?php

use App\Http\Controllers\GetViewsController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\ViewController;
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

Route::get('/', [GetViewsController::class, 'ViewIndex'])->name('home');
Route::get('/producto', [GetViewsController::class, 'ViewProducto'])->name('producto');
Route::get('/galeria', [GetViewsController::class, 'ViewGaleria'])->name('galeria');
Route::get('/conocenos', [GetViewsController::class, 'ViewConocenos'])->name('conocenos');
Route::get('/login', [GetViewsController::class, 'ViewLogin'])->name('login');
Route::post('/iniciar-sesion', [UserController::class, 'login'])->name('iniciar-sesion');
Route::get('/logout', [GetViewsController::class, 'Logout'])->name('logout')->middleware('user');
Route::get('/panel', [GetViewsController::class, 'ViewPanel'])->name('panel')->middleware('user');
Route::post('/registrar-user', [UserController::class, 'RegistrarUser'])->name('registrar-user')->middleware('user');
Route::get('/regis_name', [UserController::class, 'RegistrarNameUser'])->name('regis_name')->middleware('user');