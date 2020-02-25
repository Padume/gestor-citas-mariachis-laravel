<?php


// Rutas de la Aplicacion

// Asociando La ruta del Controlador Login a la Ruta
Route::resource('Login','LoginController');

// Template Principal
Route::get('admin','UsuarioController@admin');


// MODULOS

// Controlador para Generar las Multiples Rutas de  Clientess
Route::resource('Clientes','ClientesController');
Route::get('filtroClientes','ClientesController@filtroClientes');

// Controlador para Generar las Multiples Rutas de Serenatas
Route::resource('Serenatas','SerenatasController');
Route::get('Mapas','SerenatasController@mostrarMapa');

// Controlador para Generar las Multiples Rutas de Reportes
Route::resource('Reportes','ReportesController');

// LogOut
Route::get('cerrarSesion','LoginController@logout');
