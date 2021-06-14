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

Route::group(['middleware' => 'web'], function(){

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::get('/autors', [App\Http\Controllers\AutorController::class, 'index'])->name('listAutor');

Route::get('/autors/new', [App\Http\Controllers\AutorController::class, 'newAutor'])->name('form');

Route::post('/autors/add', [App\Http\Controllers\AutorController::class, 'add'])->name('form');

Route::get('/autors/{id}/edit', [App\Http\Controllers\AutorController::class, 'edit'])->name('form');

Route::post('/autors/update/{id}', [App\Http\Controllers\AutorController::class, 'update'])->name('form');

Route::delete('/autors/delete/{id}', [App\Http\Controllers\AutorController::class, 'delete'])->name('form');


//Route::get('/livros', );