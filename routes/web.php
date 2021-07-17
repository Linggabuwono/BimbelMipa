<?php

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
});

Auth::routes();

Route::get('/murid', [App\Http\Controllers\MuridController::class, 'index'])->name('murid');
Route::get('/murid/add', [App\Http\Controllers\MuridController::class, 'add'])->name('murid');
Route::post('/murid/create', [App\Http\Controllers\MuridController::class, 'create'])->name('murid');
Route::get('/murid/{id}/edit', [App\Http\Controllers\MuridController::class, 'edit'])->name('murid');
Route::post('/murid/{id}/update', [App\Http\Controllers\MuridController::class, 'update'])->name('murid');
Route::get('/murid/delete/{id}', [App\Http\Controllers\MuridController::class, 'delete'])->name('murid');
Route::get('/contact', [App\Http\Controllers\MuridController::class, 'contact'])->name('murid');
Route::get('/jadwal', [App\Http\Controllers\MuridController::class, 'jadwal'])->name('murid');


Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('is_admin');