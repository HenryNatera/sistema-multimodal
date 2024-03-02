<?php

use App\Http\Controllers\academicaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\acreditableController;
use App\Http\Controllers\controlEstudioController;
use App\Http\Controllers\coordinatorController;
use App\Http\Controllers\docenciaController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\professorController;
use App\Http\Controllers\studentController;
use App\Models\Noticia;
use App\Models\Pnf;
use App\Models\Professor;
use App\Models\Student;

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
	$students = Student::all();
	$professors = Professor::all();
	$pnfs = Pnf::all();
	$noticias = Noticia::orderBy('id', 'desc')->paginate(6);
	return view('welcome', ['students' => $students, 'professors' => $professors, 'pnfs' => $pnfs], compact('noticias'));
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//================ NOTICIAS ===================================

Route::controller(NoticiaController::class)->group(function () {
	Route::get('noticia/{noticia}', 'show')->name('noticia');
});

//================ MASTER ===================================

Route::controller(MasterController::class)->group(function () {
	Route::get('test/asignaturas', 'asignaturas')->name('asignaturas.test.show')->middleware('auth');
	Route::get('test/asignatura/{regular}', 'asignatura_data')->name('asignatura.test.data')->middleware('auth');
	Route::post('test/asignatura/inscribir/{regular}', 'regular_inscribir')->name('regular.test.inscribir')->middleware('auth');
	Route::post('test/regular/store', 'regular_store')->name('master.regular.store')->middleware('auth');
	Route::get('personal_data', 'datos_personales')->name('master.datos.personales')->middleware('auth');
});

//================ CRONTROL ESTUDIO =========================

Route::controller(controlEstudioController::class)->group(function () {
	Route::get('inscripcion', 'oferta_academica')->name('control.ofertta.academica')->middleware('auth');
	Route::get('sin-confirmar', 'users_pendientes')->name('control.users.pendientes')->middleware('auth');
	Route::get('registro', 'user_registro')->name('control.registro')->middleware('auth');
	Route::post('registrado', 'user_store')->name('control.user.store')->middleware('auth');
	Route::get('estudiantes', 'students_show')->name('control.students')->middleware('auth');
	Route::get('{user}/opciones', 'pnf_options')->name('control.pnfs.show')->middleware('auth');
	Route::get('oferta_academica/{user}/{pnf}', 'oferta_academica')->name('control.oferta.academica')->middleware('auth');
	Route::post('control/student/trimestral/store', 'student_trimestral_store')->name('control.student.trimestral.store')->middleware('auth');
	Route::post('control/student/semestral/store', 'student_semestral_store')->name('control.student.semestral.store')->middleware('auth');
	Route::get('egresados', 'students_egresados')->name('control.students.egresados')->middleware('auth');

	//================= LAPSOS
	Route::get('gestion', 'periodos_show')->name('control.periodos.show')->middleware('auth');
	Route::get('gestion/{p}/trimestral', 'trimestral_lapso')->name('control.lapso.trimestral')->middleware('auth');
	Route::get('gestion/{p}/semestral', 'semestral_lapso')->name('control.lapso.semestral')->middleware('auth');
	Route::patch('gestion/update/{p}', 'periodos_update')->name('control.periodos.update')->middleware('auth');
	Route::patch('g/t/c/{pe}', 'trimestral_cierre')->name('control.trimestral.cierre')->middleware('auth');
	Route::patch('g/t/n/{pe}', 'trimestral_create')->name('control.trimestral.new')->middleware('auth');
});

//================ COORDINADOR ==============================

Route::controller(coordinatorController::class)->group(function () {
	//MALLA
	Route::get('malla/', 'malla_show')->name('pnf.malla.show')->middleware('auth');
	//OFERTA ACADEMICA
	Route::get('ofertas_academicas/', 'oferta_academica')->name('coordinador.ofertas.academicas')->middleware('auth');
	Route::post('oferta/store', 'oferta_store')->name('coordinador.oferta.store')->middleware('auth');
	//SOLICITUDES
	Route::get('solicitudes/resumen', 'solicitudes_show')->name('coordinador.solicitudes')->middleware('auth');
	Route::patch('solicitud/{solicitud}/update', 'solicitud_update')->name('coordinador.solicitud.update')->middleware('auth');
	//HORARIOS
	Route::get('pnf/horario_m/store', 'horario_store')->name('coordinador.horariom.store')->middleware('auth');
	Route::get('pnf/horarios_m', 'horarios_m')->name('coordinador.horarios.m')->middleware('auth');
	Route::get('pnf/horarios_t', 'horarios_t')->name('coordinador.horarios.t')->middleware('auth');
	//NOTICIAS
	Route::get('noticias/crear', 'noticia_create')->name('coordinador.noticia.create')->middleware('auth');
	Route::post('noticia/store', 'noticia_store')->name('coordinador.noticia.store')->middleware('auth');
	//ASIGNATURAS
	Route::get('pnf/asignaturas', 'asignaturas_show')->name('coordinador.asignaturas.show')->middleware('auth');
	Route::get('pnf/asignatura/{regular}', 'asignatura_data')->name('coordinador.asignatura.data')->middleware('auth');
});

//=============== ACREDITABLES =============================

Route::controller(AcreditableController::class)->group(function () {
	Route::get('acreditables', 'show')->name('acreditable.show')->middleware('auth');
	Route::get('acreditables/registro', 'create')->name('acreditable.create')->middleware('auth');
	Route::post('acreditables/store', 'store')->name('acreditable.store')->middleware('auth');
	Route::get('acreditables/{acreditable}', 'data')->name('acreditable.data')->middleware('auth');
	Route::post('acreditables/inscribir', 'inscribir')->name('acreditable.inscribir')->middleware('auth');
});

//=============== STUDENTS ===================================

Route::controller(studentController::class)->group(function () {
	Route::get('estudiante/asignaturas_inscritas', 'asignaturas')->name('student.asignaturas.show')->middleware('auth');
	Route::get('inscripcion/regulares', 'inscripcion_regulares')->name('student.inscripcion.regulares')->middleware('auth');
	Route::post('inscripcion/{student}/regular', 'regular_store')->name('student.regular.store')->middleware('auth');
	Route::get('asignatura/{re}', 'regular_data')->name('student.regular.data')->middleware('auth');
	Route::get('solicitudes', 'solicitudes_show')->name('student.solicitudes.show')->middleware('auth');
	Route::get('solicitudes/{student}/constacias', 'constancias_certificados')->name('student.solicitudes.constacias.show')->middleware('auth');
	Route::post('solicitud/{student}/store', 'solicitud_store')->name('student.solicitud.store')->middleware('auth');
});

//================ PROFESSORS ===========================

Route::controller(professorController::class)->group(function () {
	Route::get('resumen_asignaturas', 'asignaturas_resumen')->name('professor.asignaturas.resumen')->middleware('auth');
	Route::get('asignatura_resumen/{regular}', 'regular_data')->name('professor.regular.data')->middleware('auth');
	Route::post('asignatura_resumen/add', 'evaluation_store')->name('professor.evaluation.store')->middleware('auth');
	Route::post('asignatura_resumen/evaluation', 'student_evaluation_store')->name('professor.student.evaluation')->middleware('auth');
	Route::post('asignatura_resumen/clase_online/{regular}', 'clase_online_store')->name('professor.clase.store')->middleware('auth');
	Route::patch('asignatura_resumen/evaluation_update/{r_e}', 'evaluation_update')->name('professor.evaluation.update')->middleware('auth');
	Route::patch('asignatura_resumen/clasroom_update/{regular}', 'clasroom_update')->name('professor.clasroom.update')->middleware('auth');
	Route::patch('asignatura_resumen/zoom_update/{regular}', 'zoom_update')->name('professor.zoom.update')->middleware('auth');
	Route::patch('asignatura_resumen/plan_update/{regular}', 'plan_update')->name('professor.plan.update')->middleware('auth');
});

//================ DOCENCIA ===========================

Route::controller(docenciaController::class)->group(function () {
	Route::get('docencia/', 'profesores_show')->name('docencia.profesores.show')->middleware('auth');
	Route::get('docencia/register', 'profesor_register')->name('docencia.profesores.register')->middleware('auth');
	Route::post('docencia/store', 'user_store')->name('docencia.user.store')->middleware('auth');
	Route::get('docencia/waiting', 'docentes_waiting')->name('docencia.docentes.validation')->middleware('auth');
	Route::get('docencia/docente/{user}', 'professor_validating')->name('docencia.professor.validating')->middleware('auth');
	Route::post('docencia/professor/{user}', 'professor_store')->name('docencia.professor.store')->middleware('auth');
	Route::get('docencia/professor/data/{user}', 'professor_data')->name('docencia.professor.data')->middleware('auth');
});

//================ ACADEMICA ===========================

Route::controller(academicaController::class)->group(function () {
	Route::get('academica/', 'profesores_listado')->name('academica.profesores.show')->middleware('auth');
	Route::get('academica/horarios', 'horarios_show')->name('academica.horarios.show')->middleware('auth');
	Route::get('academica/profesor/{profesor}', 'profesor_data')->name('academica.professor.data')->middleware('auth');
	Route::get('academica/revision/{profesor}/{pnf}', 'pnf_revision')->name('academica.pnf.revision')->middleware('auth');
	Route::get('academica/horario/{profesor}/{pnf}/{regular}', 'regular_revision')->name('academica.regular.revision')->middleware('auth');
	Route::post('academica/regular_horario/store', 'regular_horario_store')->name('academica.regular.horario.store')->middleware('auth');
});


//==================== REPORTES ============================

Route::controller(PDFController::class)->group(function () {
	//========= SOLICITUDES ============
	Route::get('pdf/{solicitud}/bc', 'buena_conducta')->name('solicitud.buena.conducta')->middleware('auth');
	Route::get('pdf/{solicitud}/ce', 'constancia_estudios')->name('solicitud.constancia.estudios')->middleware('auth');
	Route::get('pdf/{solicitud}/ci', 'comprobante_inscripcion')->name('solicitud.comprobante.inscripcion')->middleware('auth');
	Route::get('pdf/{solicitud}/cc', 'certificacion_calificaciones')->name('solicitud.certificacion.calificaciones')->middleware('auth');
	Route::get('pdf/{solicitud}/ra', 'record_academico')->name('solicitud.record.academico')->middleware('auth');
	Route::get('pdf/{solicitud}/ha', 'historial_academico')->name('solicitud.historial.academico')->middleware('auth');
	Route::get('pdf/{solicitud}/cca', 'culminacion_carrera')->name('solicitud.culminacion.carrera')->middleware('auth');
	Route::get('historial/', 'historial')->name('solicitud.historial')->middleware('auth');
});
