<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/client', [ClientController::class, 'index' ]  ); // Lista os clientes
Route::get('/client/create', [ClientController::class, 'create' ]); // Cria os clientes
Route::post('/client', [ClientController::class, 'store' ]); //Lê as informaçoes

