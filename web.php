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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/hello', function () {
    return 'Hello, World!';     ------> Funciona con el metodo get
});

Route::get('/', function () {
    return 'Hello, World!';   ------> Funciona con el metodo get
});

Route::get('/mi-nombre', function () {
    return 'Elsa Mery Palacios Salinas';  ------> Funciona con el metodo get
});

Route::post('/hello', function () {
    return 'Hello, World!';      ------> No funciona con el metodo post porque el formulario en welcome.blade.php usa get
});

Route::get('/mi-nombre/{nombre}', function ($nombre) {
    return $nombre;   //------> Retorna el parametro nombre
});

Route::get('/mi-nombre/{nombre}/{apellido}', function ($nombre, $apellido) {
    return "Mi nombre es: $nombre y mi apellido es: $apellido";   //------> Retorna el parametro nombre y apellido
});

Route::get('/mi-nombre/{nombre?}', function ($nombre = 'Invitado') {
    return $nombre;   //------> Retorna el parametro nombre, si no se envia ningun parametro retorna Invitado
});*/

Route::get('/electiva3', function () {
    return view('electiva3');   //------> Retorna la vista electiva3.blade.php
});

Route::get('/pagina2', function () {
    return view('pagina2');   //------> Retorna la vista pagina2.blade.php
});

Route::get('/index', function () {
    return view('index');   //------> Retorna la vista index.blade.php
});

Route::get('/login', function () {
    return view('login');   //------> Retorna la vista login.blade.php
});

Route::get('/registro', function () {
    return view('registro');   //------> Retorna la vista registro.blade.php
});

Route::get('/panel_admin', function () {
    return view('panel_admin');   //------> Retorna la vista panel_admin.blade.php
});

Route::get('/panel_usuarios', function () {
    return view('panel_usuarios');   //------> Retorna la vista panel_usuario.blade.php
});

Route::get('/panel_funcionario', function () {
    return view('panel_funcionario');   //------> Retorna la vista panel_funcionario.blade.php
});