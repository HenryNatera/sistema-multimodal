<?php

use App\Http\Controllers\academicaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\acreditableController;
use App\Http\Controllers\controlEstudioController;
use App\Http\Controllers\coordinatorController;
use App\Http\Controllers\docenciaController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PDFController;
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
	Route::post('utdft/test/regular/store', 'regular_store')->name('master.regular.store')->middleware('auth');
});

//================ CRONTROL ESTUDIO =========================

Route::controller(controlEstudioController::class)->group(function(){
	Route::get('utdft/inscripcion', 'oferta_academica')->name('control.ofertta.academica')->middleware('auth');
	Route::get('utdft/sin-confirmar', 'users_pendientes')->name('control.users.pendientes')->middleware('auth');
	Route::get('utdft/registro', 'user_registro')->name('control.registro')->middleware('auth');
	Route::post('utdft/registrado', 'user_store')->name('control.user.store')->middleware('auth');
	Route::get('utdft/estudiantes', 'students_show')->name('control.students')->middleware('auth');
	Route::get('utdft/{user}/opciones', 'pnf_options')->name('control.pnfs.show')->middleware('auth');
	Route::get('utdft/oferta_academica/{user}/{pnf}', 'oferta_academica')->name('control.oferta.academica')->middleware('auth');
	Route::post('utdft/control/student/trimestral/store', 'student_trimestral_store')->name('control.student.trimestral.store')->middleware('auth');
	Route::post('utdft/control/student/semestral/store', 'student_semestral_store')->name('control.student.semestral.store')->middleware('auth');
	Route::get('utdft/egresados', 'students_egresados')->name('control.students.egresados')->middleware('auth');
});

//================ COORDINADOR ==============================

Route::controller(coordinatorController::class)->group(function(){
	Route::get('utdft/malla/', 'malla_show')->name('pnf.malla.show')->middleware('auth');
	Route::get('utdft/ofertas_academicas/', 'oferta_academica')->name('coordinador.ofertas.academicas')->middleware('auth');
	Route::post('utdft/oferta/store', 'oferta_store')->name('coordinador.oferta.store')->middleware('auth');
	Route::get('utdft/solicitudes/resumen', 'solicitudes_show')->name('coordinador.solicitudes')->middleware('auth');
	Route::patch('utdft/solicitud/{solicitud}/update', 'solicitud_update')->name('coordinador.solicitud.update')->middleware('auth');
	Route::get('utdft/pnf/horarios_m', 'horarios_m')->name('coordinador.horarios.m')->middleware('auth');
	Route::get('utdft/pnf/horarios_t', 'horarios_t')->name('coordinador.horarios.t')->middleware('auth');
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
	Route::get('utdft/inscripcion/regulares', 'inscripcion_regulares')->name('student.inscripcion.regulares')->middleware('auth');
	Route::post('utdft/inscripcion/{student}/regular', 'regular_store')->name('student.regular.store')->middleware('auth');
	Route::get('utdft/asignatura/{re}', 'regular_data')->name('student.regular.data')->middleware('auth');
	Route::get('utdft/solicitudes', 'solicitudes_show')->name('student.solicitudes.show')->middleware('auth');
	Route::get('utdft/solicitudes/{student}/constacias', 'constancias_certificados')->name('student.solicitudes.constacias.show')->middleware('auth');
	Route::post('utdft/solicitud/{student}/store', 'solicitud_store')->name('student.solicitud.store')->middleware('auth');

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
	Route::get('utdft/academica/horario/{profesor}/{pnf}/{regular}', 'regular_revision')->name('academica.regular.revision')->middleware('auth');
	Route::post('utdft/academica/regular_horario/store', 'regular_horario_store')->name('academica.regular.horario.store')->middleware('auth');
});


//==================== REPORTES ============================

Route::controller(PDFController::class)->group(function(){
	//========= SOLICITUDES ============
	Route::get('utdft/pdf/{solicitud}/bc', 'buena_conducta')->name('solicitud.buena.conducta')->middleware('auth');
	Route::get('utdft/pdf/{solicitud}/ce', 'constancia_estudios')->name('solicitud.constancia.estudios')->middleware('auth');
	Route::get('utdft/pdf/{solicitud}/ci', 'comprobante_inscripcion')->name('solicitud.comprobante.inscripcion')->middleware('auth');
	Route::get('utdft/pdf/{solicitud}/cc', 'certificacion_calificaciones')->name('solicitud.certificacion.calificaciones')->middleware('auth');
	Route::get('utdft/pdf/{solicitud}/ra', 'record_academico')->name('solicitud.record.academico')->middleware('auth');
	Route::get('utdft/pdf/{solicitud}/ha', 'historial_academico')->name('solicitud.historial.academico')->middleware('auth');
	Route::get('utdft/pdf/{solicitud}/cca', 'culminacion_carrera')->name('solicitud.culminacion.carrera')->middleware('auth');

});