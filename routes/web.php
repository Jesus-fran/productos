<?php

use App\Http\Controllers\GetViewsController;
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