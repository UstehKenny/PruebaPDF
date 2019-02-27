<?php

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

Route::get('/', function () {
	//return 'Esto es una prueba del pdf';
    return view('principal');
});
//Rutas prueba
Route::get('principal','ConstanciasController@pdf');
Route::get('constancia', 'ConstanciasController@pdf');
Route::get('prueba','ConstanciasController@pdf');

//Constancias
Route::get('consinstructor','ConsInstructorController@pdf');
Route::get('consdosinstructor','ConsDosInstructorController@pdf');
Route::get('contresinstructor','ConsTresInstructorController@pdf');
//Zuri
Route::get('area','AreaController@pdf');
Route::get('asdict','AsDICTController@pdf');
Route::get('asdie','AsDIEController@pdf');
Route::get('asistencia','AsistenciaAController@pdf');
Route::get('catalogo','CatalogoController@pdf');
Route::get('cdd','CDDController@pdf');
Route::get('concal','ConCalController@pdf');
Route::get('concentrado','ConcentradoController@pdf');
Route::get('csolicitados','CSolicitadosController@pdf');
Route::get('cumpleanios','CumpleaniosController@pdf');
Route::get('cursoa','CursoAController@pdf');
Route::get('cursoacddc','CursoACDDController@pdf');
Route::get('instructores','InstructoresController@pdf');
Route::get('pagos','PagosController@pdf');
Route::get('participantes','ParticipantesController@pdf');
Route::get('pnombre','PNombreController@pdf');
Route::get('registrados','RegistradosController@pdf');
Route::get('resumen','ResumenController@pdf');
Route::get('resumeninscritos','ResumenInscritosController@pdf');
Route::get('sincal','SinCalController@pdf');
Route::get('sugerencias','SugerenciasController@pdf');
Route::get('tutoria','TutoriaController@pdf');
Route::get('validacion','ValidacionController@pdf');