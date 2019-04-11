<?php

Route::get('certificados','CertificateController@certificates');
Route::get('usuarios','UserController@users');
Route::get('cursos','CourseController@courses');
Route::get('admis','AdmiController@admis');
Route::get('temas','TemaryController@temaries');
Route::get('consultas','ConsultaController@consults');


