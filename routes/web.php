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

Route::get('admin/permiso', 'Admin\PermisoController@index')->name('permiso');
Route::get('admin/permiso/crear', 'Admin\PermisoController@crear')->name('crear_permiso');
/*RUTAS DEL MENÚ*/
Route::get('admin/menu', 'Admin\MenuController@index')->name('menu');
Route::get('admin/menu/crear', 'Admin\MenuController@crear')->name('crear_menu');
Route::post('admin/menu', 'Admin\MenuController@guardar')->name('guardar_menu');
Route::post('admin/menu/guardar-orden', 'Admin\MenuController@guardarOrden')->name('guardar_orden');
/*RUTAS ROL*/
Route::get('admin/rol', 'Admin\RolController@index')->name('rol');
Route::get('admin/rol/crear', 'Admin\RolController@crear')->name('crear_rol');
Route::post('admin/rol', 'Admin\RolController@guardar')->name('guardar_rol');
Route::get('admin/rol/{id}/editar', 'Admin\RolController@editar')->name('editar_rol');
Route::put('admin/rol/{id}', 'Admin\RolController@actualizar')->name('actualizar_rol');
Route::delete('admin/rol/{id}', 'Admin\RolController@eliminar')->name('eliminar_rol');
/*RUTAS MENU_ROL*/
Route::get('admin/menu-rol', 'Admin\MenuRolController@index')->name('menu_rol');
Route::post('admin/menu-rol', 'Admin\MenuRolController@guardar')->name('guardar_menu_rol');
