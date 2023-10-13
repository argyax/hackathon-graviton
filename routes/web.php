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

//Route bawaan default laravel
Route::get('/', function () {
    return view('beranda');
});

//Route Pages
// Using the string format
Route::get('/trash', 'PageController@trash');
Route::get('/trash/addTrash', 'PageController@addTrash');
