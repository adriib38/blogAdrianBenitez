<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\WritersController;
use App\Http\Controllers\LoginController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

/*

Route::get('/', function () {
    return ('Hola soy Adrián Benítez, bienvenido a mi blog.');
})->name('inicio');

Route::get('/posts', function () {
    return ('Listado de posts del blog');
})->name('posts');

Route::get('/post/{id?}', function ($id = 'null') {
    return ('Este es el post: '.$id);
})->whereNumber('id')
->name('post');

*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

//Rutas de PostsController
Route::resource('posts', PostsController::class)
->parameters(['post' => 'slug'])
->missing(function (Request $request) {
    return Redirect::route('posts.index');
});

Route::resource('sales', SalesController::class)->parameters(['sales' => 'sale'])
->names([
    'index' => 'sales.lista',
    'create' => 'sales.crear',
    'show' => 'sales.show',
    'edit' => 'sales.editar',
])->except(['store', 'update', 'destroy']);

Route::resource('writers', WritersController::class)->parameters(['writers' => 'writer'])
->names([
    'index' => 'writers.lista',
    'create' => 'writers.crear',
    'show' => 'writers.show',
    'edit' => 'writers.editar',
])->except(['store', 'update', 'destroy']);

Route::get('sales/empresa/{company}', [SalesController::class, 'empresa']);

Route::get('primos/{numeros}', [OperacionesController::class, 'listarPrimerosPrimos'])
->whereNumber('numeros');

Route::get('factorial/{numero}', [OperacionesController::class, 'factorial'])
->whereNumber('numero');

/* AUTH */
Route::get('registro', [LoginController::class, 'registerForm']);
Route::post('registro', [LoginController::class, 'register'])->name('registro');
Route::get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
