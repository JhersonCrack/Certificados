<?php

Route::get('/','CertificateController@certificates')->name('certifis');
Route::get('usuarios','UserController@users');
Route::get('cursos','CourseController@courses');
Route::get('admis','AdmiController@admis');
Route::get('temas','TemaryController@temaries');
Route::get('consultas','ConsultaController@consults');

//Busqueda -> solo codigo agregar ... otras busquedas con sus controladores ->  
Route::get('/searchCodigo', 'CertificateController@searchCodigo');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
