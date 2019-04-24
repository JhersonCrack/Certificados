<?php

Route::get('/','CertificateController@certificates')->name('certifis');
Route::get('usuarios','UserController@users');
Route::get('cursos','CourseController@courses');
Route::get('admis','AdmiController@admis');
Route::get('temas','TemaryController@temaries');
Route::get('consultas','ConsultaController@consults');


