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

Route::get('/', 'InicioController@index')->name('inicio');
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
//Grupo admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {

    Route::get('', 'AdminController@index');

    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    /*RUTAS DEL MENÚ*/
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::get('menu/{id}/editar','MenuController@editar')->name('editar_menu');
    Route::put('menu/{id}','MenuController@actualizar')->name('actualizar_menu');
    Route::get('menu/{id}/eliminar','MenuController@eliminar')->name('eliminar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');
    /*RUTAS ROL*/
    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
    Route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
    /*RUTAS MENU_ROL*/
    Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar_menu_rol');
});

// //Grupo admin
// Route::get('admin', 'Admin\AdminController@index');

// Route::get('admin/permiso', 'Admin\PermisoController@index')->name('permiso');
// Route::get('admin/permiso/crear', 'Admin\PermisoController@crear')->name('crear_permiso');
// /*RUTAS DEL MENÚ*/
// Route::get('admin/menu', 'Admin\MenuController@index')->name('menu');
// Route::get('admin/menu/crear', 'Admin\MenuController@crear')->name('crear_menu');
// Route::post('admin/menu', 'Admin\MenuController@guardar')->name('guardar_menu');
// Route::post('admin/menu/guardar-orden', 'Admin\MenuController@guardarOrden')->name('guardar_orden');
// /*RUTAS ROL*/
// Route::get('admin/rol', 'Admin\RolController@index')->name('rol');
// Route::get('admin/rol/crear', 'Admin\RolController@crear')->name('crear_rol');
// Route::post('admin/rol', 'Admin\RolController@guardar')->name('guardar_rol');
// Route::get('admin/rol/{id}/editar', 'Admin\RolController@editar')->name('editar_rol');
// Route::put('admin/rol/{id}', 'Admin\RolController@actualizar')->name('actualizar_rol');
// Route::delete('admin/rol/{id}', 'Admin\RolController@eliminar')->name('eliminar_rol');
// /*RUTAS MENU_ROL*/
// Route::get('admin/menu-rol', 'Admin\MenuRolController@index')->name('menu_rol');
// Route::post('admin/menu-rol', 'Admin\MenuRolController@guardar')->name('guardar_menu_rol');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
