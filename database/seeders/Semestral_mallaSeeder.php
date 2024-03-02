<?php

namespace Database\Seeders;

use App\Models\Semestral_malla;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Semestral_mallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        //================= TURISMO ======================//

        // ====== SEMESTRE I ====== //

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'INTRODUCCIÓN A LA ADMINISTRACIÓN',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'TÉCNICAS DE ESTUDIOS',
            'ht' => 2,
            'hp' => 1,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'LENGUA WARAO I',
            'ht' => 1,
            'hp' => 1,
            'th' => 2,
            'uc' => 1,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'INGLES I',
            'ht' => 1,
            'hp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'MATEMÁTICA',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'PENSAMIENTO CRÍTICO',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'ACTIVIDADES COMPLEMENTARIAS I Y II',
            'htp' => 2,
            'th' => 2,
            'uc' => 2,
        ]);

        // ====== SEMESTRE II ====== //

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'LENGUA WARAO II',
            'ht' => 1,
            'hp' => 1,
            'th' => 2,
            'uc' => 1,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'INGLES II',
            'ht' => 1,
            'hp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);
        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'CONTABILIDAD II',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'LENGUA Y COMUNICACIÓN',
            'ht' => 1,
            'hp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'RELACIONES HUMANAS',
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'TEORÍA Y TÉCNICA DEL TURISMO',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'FUNDAMENTO DE ECONOMÍA',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        // ====== SEMESTRE III ====== //

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'ESTADÍSTICA',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'INGLÉS II',
            'ht' => 2,
            'hp' => 1,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'ADMINISTRACIÓN DE RECURSOS HUMANOS',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'CONTABILIDAD II',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'LEGISLACIÓN TURÍSTICA',
            'ht' => 2,
            'th' => 2,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'MATMÁTICA FINANCIERA',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'INGLÉS III',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'CONTABILIDAD TURÍSTICA II',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'GEOGRAFÍA TURÍSTICA II',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        // ====== SEMESTRE IV ====== //

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'ORGANIZACIÓN Y ADMINISTRACIÓN DE EMPRESAS TURÍSTICAS',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'CEREMONIAL Y PROTOCOLO',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'ANIMACIÓN Y RECREACIÓN',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'INTRODUCCIÓN A LA INVESTIGACIÓN',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'INGLES IV',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'PLANIFICACIÓN TURÍSTICA',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'MERCADO TURÍSTICO',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        // ====== SEMESTRE V ====== //

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'TRÁFICO AÉREO',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'RUTAS Y CIRCUITOS',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'PROGRAMA Y COORDINACIÓN DE EVENTOS',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'METAS PARA ELABORACIÓN DE PROYECTOS',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'INGLES V',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'PRESUPUESTO',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        // ====== SEMESTRE VI ====== //

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 6,
            'asignatura' => 'PASANTÍAS',
            'th' => 0,
            'uc' => 6,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'num' => 1,
            'semestre' => 6,
            'asignatura' => 'TRÁFICO AÉREO',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        //================= CONSTRUCCION CIVIL ====================/

        // ====== SEMESTRE I ====== //

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'LENGUA WARAO',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'MATEMÁTICA',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'INGLÉS TÉCNICO',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'QUÍMICA',
            'ht' => 2,
            'hp' => 3,
            'th' => 5,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'FÍSICA',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'DIBUJO I',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'ACTIVIDADES COMPLEMENTARIAS',
            'htp' => 2,
            'th' => 2,
            'uc' => 1,
        ]);

        // ====== SEMESTRE II ====== //

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'LENGUA Y COMUNICACIÓN',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'MATEMÁTICA II',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'PROBLEMÁTICA DEL DESARROLLO ECONÓMICO Y SOCIAL',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'MATERIALES DE CONTRUCCIÓN',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'MECÁNICA RACIONAL',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'DIBUJO II',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'TOPOGRAFÍA I',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'EDUCACIÓN AMBIENTAL',
            'ht' => 2,
            'th' => 2,
            'uc' => 2,
        ]);

        // ====== SEMESTRE III ====== //

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'MECÁNICA DE FLUIDO',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'MATEMÁTICA III',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'MANTENIMIENTO Y SEGURIDAD INDEPENDIENTE',
            'ht' => 2,
            'th' => 2,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'CONSTRUCCIONES',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'RESISTENCIA DE MATERIALES I',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'ORGANIZACIÓN DE EMPRESAS',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'TOPOGRAFÍA II',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'INFORMÁTICA',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        // ====== SEMESTRE IV ====== //

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'ABASTECIMIENTO DE AGUA I',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'MATEMÁTICA IV',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'INSTALACIONES ELECTRICAS',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'MECÁNICA DE SUELOS',
            'ht' => 2,
            'hp' => 3,
            'th' => 5,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'RESISTENCIA DE MATERIALES II',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'CONCRETO ARMADO',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'VÍAS DE COMUNICACIÓN',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        // ====== SEMESTRE V ====== //

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'ABASTECIMIENTO DE AGUA II',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'CONSTRUCCIONES METÁLICAS',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'ÉTICA Y EJERCICIO PROFESIONAL',
            'ht' => 2,
            'th' => 2,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'PRESUPUESTO Y ADMINISTRACIÓN DE OBRAS',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'ESTRUCTURAS',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'METODOLOGÍA',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'PAVIMENTO',
            'ht' => 2,
            'hp' => 2,
            'th' => 5,
            'uc' => 3,
        ]);

        // ====== SEMESTRE VI ====== //

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 6,
            'asignatura' => 'PASANTÍA',
            'th' => 0,
            'uc' => 6,
        ]);

        Semestral_malla::create([
            'pnf_id' => '7',
            'num' => 1,
            'semestre' => 6,
            'asignatura' => 'TRABAJO ESPECIAL DE GRADO',
            'th' => 0,
            'uc' => 6,
        ]);

        //=================== ENFERMERIA ===========================

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'LENGUA WARAO',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 1,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'TÉCNICAS DE ESTUDIOS E INVESTIGACIÓN',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'DESARROLLO PERSONAL',
            'ht' => 2,
            'th' => 2,
            'uc' => 1,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'MORFOLOGÍA',
            'ht' => 2,
            'htp' => 4,
            'th' => 6,
            'uc' => 4,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'PSICOLOGÍA GENERAL',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'LENGUA Y COMUNICACIÓN',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'ENFERMERÍA BÁSICA',
            'ht' => 4,
            'hp' => 8,
            'th' => 12,
            'uc' => 6,
        ]);

        // ====== SEMESTRE II ====== //

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'SALUD Y DESAROLLO ECONÓMICO Y SOCIAL',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'BIOQUÍMICA',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'ESTADÍSTICA INFERENCIAL',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'ANATONMÍA HUMANA',
            'ht' => 2,
            'htp' => 4,
            'th' => 6,
            'uc' => 4,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'ENFERMERÍA MATERNO INFANTIL I',
            'ht' => 2,
            'hp' => 4,
            'htp' => 6,
            'th' => 12,
            'uc' => 6,
        ]);

        // ====== SEMESTRE III ====== //

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'SOCIO ANTROPOLOGÍA',
            'ht' => 2,
            'th' => 2,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'FARMACOLOGÍA',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'BIOESTADÍSTICA Y EPIDEMIOLOGÍA',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'FISIOLOGÍA',
            'ht' => 3,
            'hp' => 3,
            'th' => 6,
            'uc' => 4,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'ENFERMERÍA EN SALUD MENTAL Y PSICOLÓGICO',
            'ht' => 2,
            'htp' => 2,
            'hp' => 6,
            'th' => 10,
            'uc' => 5,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 3,
            'asignatura' => 'NUTRICIÓN Y DIETÉTICA',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        // ====== SEMESTRE IV ====== //

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'ENFERMERÍA MATERNO INFANTIL II',
            'ht' => 2,
            'htp' => 4,
            'hp' => 6,
            'th' => 12,
            'uc' => 6,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'ENFERMERÍA MEDICO QUIRÚRGICO',
            'ht' => 2,
            'htp' => 4,
            'hp' => 6,
            'th' => 12,
            'uc' => 6,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'METODOLOGÍA DE LA INFORMACIÓN',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'MICROBIOLOGÍA Y PARASITOLOGÍA',
            'ht' => 3,
            'hp' => 3,
            'th' => 6,
            'uc' => 4,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 4,
            'asignatura' => 'FISIOPATOLOGÍA',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        // ====== SEMESTRE V ====== //

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'ENFERMERÍA COMUNITARIA E INVESTIGACIÓN APLICADA',
            'ht' => 2,
            'htp' => 4,
            'hp' => 6,
            'th' => 12,
            'uc' => 6,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'ADMINISTRACIÓN DE LA ATENCIÓN DE ENFERMERÍA',
            'ht' => 6,
            'th' => 6,
            'uc' => 6,
        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 5,
            'asignatura' => 'ENFERMERÍA MEDICO QUIRÚRGICO II',
            'ht' => 2,
            'htp' => 4,
            'hp' => 6,
            'th' => 12,
            'uc' => 6,
        ]);

        // ====== SEMESTRE VI ====== //

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 6,
            'asignatura' => 'INTERNADO ROTATORIO',
            'hp' => 24,
            'th' => 24,
            'uc' => 6,

        ]);

        Semestral_malla::create([
            'pnf_id' => '8',
            'num' => 1,
            'semestre' => 6,
            'asignatura' => 'TRABAJO ESPECIAL DE GRADO',
            'th' => 0,
            'uc' => 6,

        ]);


        // =========== EDUCACIÓN FÍSICA Y DEPORTE ===============//

        // ====== SEMESTRE I =======//

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'LENGUA WARAO',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'MATEMÁTICA GENERAL',
            'ht' => 2,
            'htp' => 2,
            'th' => 3,
            'uc' => 4,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'EDUCACIÓN AMBIENTAL',
            'ht' => 2,
            'th' => 2,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'INGLÉS',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'ELEMENTOS DE EDUACIÓN FÍSICA',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'LENGUAJE Y COMUNICACIÓN',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'ELEMENTOS PREDEPORTIVOS Y ENTRENAMIENTO FÍSICO B',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 1,
            'asignatura' => 'ACTIVIDADES COMPLEMENTARIAS',
            'htp' => 2,
            'th' => 2,
            'uc' => 1,
        ]);

        //======== SEMESTRE II ========//

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'BIOQUÍMICA Y NUTRICIÓN',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'INTRODUCCIÓN A LOS SISTEMAS DE INFORMÁTICA',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'PROBLEMÁTICA DEL DESARROLLO ECONÓMICO Y SOCIAL',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'ANATOMÍA Y PRIMEROS AUXILIOS',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'PSICOLOGÍA DEL DEPORTE',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'DINÁMICA DE GRUPO Y ORIENTACIÓN',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '9',
            'num' => 1,
            'semestre' => 2,
            'asignatura' => 'ATLETISMO I',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);
    }
}
