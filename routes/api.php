<?php

;
use App\Http\Controllers\PessoaFisicaController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EstadoController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

        
        Route::post('/pessoa_fisica', [PessoaFisicaController::class, 'store'])->name('api.pessoa_fisica');
        Route::put('/pessoa_fisica/{id}', [PessoaFisicaController::class, 'update'])->name('api.pessoa_fisica1');
        Route::get('/pessoa_fisica', [PessoaFisicaController::class, 'index'])->name('api.pessoa_fisica2');
        Route::get('/pessoa_fisica/{id}', [PessoaFisicaController::class, 'show'])->name('api.pessoa_fisica3');
        Route::delete('/pessoa_fisica/{id}', [PessoaFisicaController::class, 'destroy'])->name('api.pessoa_fisica4');



        Route::post('/cadastrar_cidade', [CidadeController::class, 'store'])->name('api.cadastrar_cidade');
        Route::put('/cidades/{id}', [CidadeController::class, 'update'])->name('api.cidades1');
        Route::get('/cidades', [CidadeController::class, 'index'])->name('api.cidades2');
        Route::get('/cidades/{id}', [CidadeController::class, 'show'])->name('api.cidades3');
        Route::delete('/cidades/{id}', [CidadeController::class, 'destroy'])->name('api.cidades4');
        
       
        Route::post('/cadastrar_estado', [EstadoController::class, 'store'])->name('api.cadastrar_estado');
        Route::get('/estados', [EstadoController::class, 'index'])->name('api.estados1');
        Route::get('/estados/{id}', [EstadoController::class, 'show'])->name('api.estados2');
        Route::put('/estados/{id}', [EstadoController::class, 'update'])->name('api.estados3');
        Route::delete('/estados/{id}', [EstadoController::class, 'destroy'])->name('api.estados4');
