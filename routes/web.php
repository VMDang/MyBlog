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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/', [\App\Http\Controllers\PostController::class, 'savePost'])->name('savePost');

Route::get('/fashion/list', [\App\Http\Controllers\PostController::class, 'listFashion'])->name('fashion.list');
Route::get('/travel/list', [\App\Http\Controllers\PostController::class, 'listTravel'])->name('travel.list');
Route::get('/technology/list', [\App\Http\Controllers\PostController::class, 'listTechnology'])->name('technology.list');
Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'showPost'])->name('post.show');
Route::get('/edit/{id}', [\App\Http\Controllers\PostController::class, 'editPost'])->name('editPost');
Route::post('/edit/{id}', [\App\Http\Controllers\PostController::class, 'updatePost'])->name('updatePost');
Route::get('/delete/{id}', [\App\Http\Controllers\PostController::class, 'deletePost'])->name('deletePost');
