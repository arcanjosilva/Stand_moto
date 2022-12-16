<?php

use App\Http\Controllers\MarcasController;
use App\Http\Controllers\MotasController;
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

Route::get('/', function () {
    return view('welcome');
})->name('root');


Route::get('/motas',[MotasController::class,'index'])->name('motas.index');
Route::get('/motas/tipo/{id}',[MotasController::class,'motasPorTipo'])->name('motas.by.tipo');
Route::get('/motas/create',[MotasController::class,'create'])->name('motas.create')->middleware('auth');
Route::get('/motas/edit/{id}',[MotasController::class,'edit'])->name('motas.edit')->middleware('auth');
Route::post('/motas',[MotasController::class,'store'])->name('motas.store')->middleware('auth');;
Route::put('/motas/{id}',[MotasController::class,'update'])->name('motas.update')->middleware('auth');
Route::get('/motas/{id}',[MotasController::class,'show'])->name('motas.show');
Route::delete('/motas/{id}',[MotasController::class,'destroy'])->name('motas.destroy')->middleware('auth');

Route::get('/marcas',[MarcasController::class,'index'])->name('marcas.index');
// Route::get('/marcas/tipo/{id}',[MarcasController::class,'marcasPorTipo'])->name('marcas.by.tipo');
Route::get('/marcas/create',[MarcasController::class,'create'])->name('marcas.create')->middleware('auth');
Route::get('/marcas/edit/{id}',[MarcasController::class,'edit'])->name('marcas.edit')->middleware('auth');
Route::post('/marcas',[MarcasController::class,'store'])->name('marcas.store')->middleware('auth');
Route::put('/marcas/{id}',[MarcasController::class,'update'])->name('marcas.update')->middleware('auth');
Route::get('/marcas/{id}',[MarcasController::class,'show'])->name('marcas.show');
Route::delete('/marcas/{id}',[MarcasController::class,'destroy'])->name('marcas.destroy')->middleware('auth');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
