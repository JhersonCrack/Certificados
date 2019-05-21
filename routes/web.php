<?php
//vista de aterrizaje para consultas, sin login

Route::get('/','CertificateController@welcome')->name('welcome');

Route::resource('usuarios','UserController');

//vistas de administrador con login

Route::get('temas','TemaryController@temaries');

//Busqueda -> solo codigo cip, agregar ... otras busquedas con sus controladores ->
Route::get('/searchCodigo', 'CertificateController@searchCodigo');

//Aunteticación
Auth::routes();
Route::get('home', 'HomeController@index')->name('home');
