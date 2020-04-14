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

Route::get('/', 'InicioController@index');

//Grupo admin

Route::get('admin/permiso','Admin\PermisoController@index')->name('permiso');
Route::get('admin/permiso/crear','Admin\PermisoController@crear')->name('crear_permiso');

Route::get('admin/menu','Admin\MenuController@index')->name('menu');
Route::get('admin/menu/crear','Admin\MenuController@crear')->name('crear_menu');
Route::post('admin/menu','Admin\MenuController@guardar')->name('guardar_menu');
Route::post('admin/menu/guardar-orden','Admin\MenuController@guardarOrden')->name('guardar_orden');