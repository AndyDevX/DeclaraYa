<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Raíz
Route::get('/', function () {
    return view('welcome');
});

// Landing page para recibir al usuario e información general
Route::get('/landing', action: function () {
    $users = [
        "Ana de Armas" => "img/users/ana-armas.webp",
        "Margaret Qualley"=> "img/users/margaret-qualley.webp",
        "Dua Lipa"=> "img/users/dua-lipa.webp",
        "Kathryn Newton"=> "img/users/kathryn-newton.webp",
        "Macarena García"=> "img/users/macarena-garcia.webp",
    ];

    return view('landing', ['users'=> $users]);
});

// Formulario de registro o inicio de sesión
Route::get('/auth', function () {
    return view('auth');
});

// Dashboard con resumen e información general y acceso a los modulos
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Operaciones con las herramientas
Route::get('/module', function () {
    return view('module');
});