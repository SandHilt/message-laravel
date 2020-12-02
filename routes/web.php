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

Route::get('/', ['\App\Http\Controllers\PostController', 'index'])
    ->name('home');
Route::post('/post', ['\App\Http\Controllers\PostController', 'store'])
    ->name('post.store')
    ->middleware('auth');

Route::post('/logme', 
    [
        '\App\Http\Controllers\LoginController',
        'authenticate'
    ])
    ->name('logme')
    ->middleware('guest');