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
Route::post('/', [\App\Http\Controllers\PostController::class, 'savePost'])->name('savePost');

Route::get('/fashion/list', function (){
    return view('fashion.list');
})->name('fashion.list');

Route::get('/travel/list', function (){
    return view('fashion.list');
})->name('travel.list');

Route::get('/technology/list', function (){
    return view('fashion.list');
})->name('technology.list');

Route::get('/post', function (){
    return view('posts.post');
});

