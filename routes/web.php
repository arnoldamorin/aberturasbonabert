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
/*-----------------------------*/
/* CONTROLADOR MENU            */
/*-----------------------------*/

Route::get('/sistema/menu','ControladorMenu@index');
Route::get('/sistema/menu/nuevo','ControladorMenu@nuevo');
Route::get('/sistema/menu/nuevo','ControladorMenu@guardar');
Route::get('/sistema/menu/cargarGrilla','ControladorMenu@cargarGrilla')->name('menu.cargarGrilla');
Route::get('/sistema/menu/eliminar','ControladorMenu@eliminar');
Route::get('/sistema/menu/{id}','ControladorMenu@editar');
Route::post('/sistema/menu/{id}','ControladorMenu@guardar');

Route::get('/', function () {
    return view('welcome');
});
