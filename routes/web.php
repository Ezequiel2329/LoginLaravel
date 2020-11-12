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

Route::get('/', 'ControllerPin@login');
Route::post('/validar', 'ControllerPin@validar');

Route::get('/inicio', ['uses'=>'ControllerPin@home', 'as' =>'inicio']);
Route::get('/p1', ['uses'=>'ControllerPin@pintor1', 'as' =>'pintor1']);
Route::get('/p2', ['uses'=>'ControllerPin@pintor2', 'as' =>'pintor2']);
Route::get('/p3', ['uses'=>'ControllerPin@pintor3', 'as' =>'pintor3']);
Route::get('/p4', ['uses'=>'ControllerPin@pintor4', 'as' =>'pintor4']);
Route::get('/p5', ['uses'=>'ControllerPin@pintor5', 'as' =>'pintor5']);
