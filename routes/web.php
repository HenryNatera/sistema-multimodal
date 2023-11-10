<?php

use App\Http\Controllers\academicaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\acreditableController;
use App\Http\Controllers\coordinatorController;
use App\Http\Controllers\docenciaController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\professorController;
use App\Http\Controllers\studentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//================ MASTER ===================================

Route::controller(MasterController::class)->group(function(){
	Route::get('utdft/test/asignaturas', 'asignaturas')->name('asignaturas.test.show')->middleware('auth');
	Route::get('utdft/test/asignatura/{regular}', 'asignatura_data')->name('asignatura.test.data')->middleware('auth');
	Route::post('utdft/test/asignatura/inscribir/{regular}', 'regular_inscribir')->name('regular.test.inscribir')->middleware('auth');
});

//================ COORDINADOR ==============================

Route::controller(coordinatorController::class)->group(function(){
	Route::get('utdft/malla/', 'malla_show')->name('pnf.malla.show')->middleware('auth');
});

//=============== ACREDITABLES =============================

Route::controller(AcreditableController::class)->group(function(){
	Route::get('utdft/acreditables', 'show')->name('acreditable.show')->middleware('auth');
	Route::get('utdft/acreditables/registro', 'create')->name('acreditable.create')->middleware('auth');
	Route::post('utdft/acreditables/store', 'store')->name('acreditable.store')->middleware('auth');
	Route::get('utdft/acreditables/{acreditable}', 'data')->name('acreditable.data')->middleware('auth');
	Route::post('utdft/acreditables/inscribir', 'inscribir')->name('acreditable.inscribir')->middleware('auth');
});

//=============== STUDENTS ===================================

Route::controller(studentController::class)->group(function(){
	Route::get('utdft/estudiante/asignaturas_inscritas', 'asignaturas')->name('student.asignaturas.show')->middleware('auth');
	Route::get('utdft/asignatura/{re}', 'regular_data')->name('student.regular.data')->middleware('auth');
});

//================ PROFESSORS ===========================

Route::controller(professorController::class)->group(function(){
	Route::get('utdft/resumen_asignaturas', 'asignaturas_resumen')->name('professor.asignaturas.resumen')->middleware('auth');
	Route::get('utdft/asignatura_resumen/{regular}', 'regular_data')->name('professor.regular.data')->middleware('auth');
	Route::post('utdft/asignatura_resumen/add', 'evaluation_store')->name('professor.evaluation.store')->middleware('auth');
	Route::post('utdft/asignatura_resumen/evaluation', 'student_evaluation_store')->name('professor.student.evaluation')->middleware('auth');
	Route::patch('utdft/asignatura_resumen/evaluation_update/{r_e}', 'evaluation_update')->name('professor.evaluation.update')->middleware('auth');
});

//================ DOCENCIA ===========================

Route::controller(docenciaController::class)->group(function(){
	Route::get('utdft/profesores/', 'profesores_show')->name('docencia.profesores.show')->middleware('auth');
});

//================ ACADEMICA ===========================

Route::controller(academicaController::class)->group(function(){
	Route::get('utdft/academica/', 'profesores_listado')->name('academica.profesores.show')->middleware('auth');
	Route::get('utdft/academica/horarios', 'horarios_show')->name('academica.horarios.show')->middleware('auth');
	Route::get('utdft/academica/profesor/{profesor}', 'profesor_data')->name('academica.professor.data')->middleware('auth');
	Route::get('utdft/academica/revision/{profesor}/{pnf}', 'pnf_revision')->name('academica.pnf.revision')->middleware('auth');
	Route::get('utdft/academica/horario/{profesor}/{pnf}/{trim}', 'regular_revision')->name('academica.regular.revision')->middleware('auth');
});