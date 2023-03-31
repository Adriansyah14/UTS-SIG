<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarkerController;
use App\Http\Controllers\MapController;
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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //home

Route::get('/tambah', [App\Http\Controllers\MarkerController::class, 'index'])->name('tambah'); //tambah
Route::post('/tambah', [App\Http\Controllers\MarkerController::class, 'store'])->name('tambah.store'); //tambah
Route::delete('/hapus/{id}', [MarkerController::class, 'destroy'])->name('home.destroy');//hapus
Route::get('/edit/{id}', [App\Http\Controllers\MarkerController::class, 'edit'])->name('edit'); //edit
Route::put('/edit/{id}', [App\Http\Controllers\MarkerController::class, 'update'])->name('edit.update'); //update

Route::get('/', [App\Http\Controllers\MapController::class, 'index'])->name('/'); //map
Route::get('/info', [App\Http\Controllers\HomeController::class, 'info'])->name('info'); //map
Route::get('/json', [App\Http\Controllers\MapController::class, 'json'])->name('json'); //json

Route::get('/index', function () {
    return view('index');
});