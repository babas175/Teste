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
Route::get('/cadastrar_cidade', function () {
    return view('cadastrar_cidade');
});
Route::get('/cadastrar_estado', function () {
    return view('cadastrar_estado');
});
Route::get('/comprovante', function () {
    return view('comprovante');
});

