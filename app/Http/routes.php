<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');


});


Route::get('home', function () {
    return view('home');

});

//rutas alumnos
Route::get('alumnos', function () {
    return view('alumnos');
});

route::post('alumnos','alumnoscontroller@create');
route::get('consultar_alumnos','alumnoscontroller@consultar_alumnos');
route::get('Editar alumnos/{id}','alumnoscontroller@Editar');
Route::post('actualizar_alumnos/{id}','alumnoscontroller@actualizar');
Route::get('Eliminar alumnos/{id}','alumnoscontroller@Eliminar');


//rutas administrador
Route::get('administrador', function () {
    return view('administrador');
});

route::post('administrador','administradorcontroller@create');
route::get('consultar_administrador','administradorcontroller@consultar_administrador');
route::get('Editar administrador/{id}','administradorcontroller@Editar');
Route::post('actualizar_administrador/{id}','administradorcontroller@actualizar');
Route::get('Eliminar administrador/{id}','administradorcontroller@Eliminar');


//rutas entrenador
Route::get('entrenador', function () {
    return view('entrenador');
});

route::post('entrenador','entrenadorcontroller@create');
route::get('consultar_entrenador','entrenadorcontroller@consultar_entrenador');
route::get('Editar entrenador/{id}','entrenadorcontroller@Editar');
Route::post('actualizar_entrenador/{id}','entrenadorcontroller@actualizar');
Route::get('Eliminar entrenador/{id}','entrenadorcontroller@Eliminar');




//rutas prestamos
Route::get('prestamos', function () {
    return view('prestamos');
});

route::post('prestamos','prestamoscontroller@create');
route::get('consultar_prestamos','prestamoscontroller@consultar_prestamos');
route::get('Editar prestamos/{id}','prestamoscontroller@Editar');
Route::post('actualizar_prestamos/{id}','prestamoscontroller@actualizar');
Route::get('Eliminar prestamos/{id}','prestamoscontroller@Eliminar');

//rutas horarios
Route::get('horarios', function () {
    return view('horarios');
});

route::post('horarios','horarioscontroller@create');
route::get('consultar_horarios','horarioscontroller@consultar_horarios');
route::get('Editar/{id}','horarioscontroller@Editar');
Route::post('actualizar_horarios/{id}','horarioscontroller@actualizar');
Route::get('Eliminar/{id}','horarioscontroller@Eliminar');

//rutas inventario
Route::get('inventario', function () {
    return view('inventario');
});

route::post('inventario','inventariocontroller@create');
route::get('consultar_inventario','inventariocontroller@consultar_inventario');
route::get('Editar inventario/{id}','inventariocontroller@Editar');
Route::post('actualizar_inventario/{id}','inventariocontroller@actualizar');
Route::get('Eliminar inventario/{id}','inventariocontroller@Eliminar');

//diseño
Route::get('disenio', function () {
    return view('disenio');
});
 //registrarse ejercicio
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//sahd

