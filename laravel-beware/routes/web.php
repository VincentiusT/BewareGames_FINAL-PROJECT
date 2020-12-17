<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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
})->middleware('auth');

Route::get('/login','authController@login')->name('login');
Route::post('/postlogin','authController@postlogin');
Route::get('/logout','authController@logout');

Route::get('/register','authController@register');
Route::post('/postregister','authController@postregister');

Route::post('/submit','homeController@submit')->middleware('auth');

Route::get('/game', 'homeController@index')->middleware('auth');
Route::post('/game/create', 'homeController@create')->middleware('auth');
Route::get('/game/{id}/edit', 'homeController@edit')->middleware('auth');
Route::post('/game/{id}/update', 'homeController@update')->middleware('auth');
Route::get('/game/{id}/delete', 'homeController@delete')->middleware('auth');

Route::get('/about', 'homeController@about')->middleware('auth');