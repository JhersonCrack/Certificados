<?php
//vista de aterrizaje para consultas, sin login
Route::get('/','CertificateController@welcome')->name('welcome');

//crud de certificates
Route::get('crear','CertificateController@create')->name('create');

//vistas de administrador con login
Route::get('usuarios','UserController@users');
Route::get('cursos','CourseController@courses');
Route::get('admis','AdmiController@admis');
Route::get('temas','TemaryController@temaries');

//Busqueda -> solo codigo cip, agregar ... otras busquedas con sus controladores ->
Route::get('/searchCodigo', 'CertificateController@searchCodigo');

//Aunteticación
Auth::routes();
Route::get('home', 'HomeController@index')->name('home');
