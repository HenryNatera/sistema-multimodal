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

//================= TURISMO ===================
      
        Semestral_malla::create([
            'pnf_id' => '4',
            'semestre' => 1,
            'asignatura' => 'introduccion a la administracion',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '4',
            'semestre' => 1,
            'asignatura' => 'tecnicas de estudio',
            'ht' => 2,
            'hp' => 1,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '4',
            'semestre' => 1,
            'asignatura' => 'lengua warao',
            'ht' => 1,
            'hp' => 1,
            'th' => 2,
            'uc' => 1,
        ]);

        Semestral_malla::create([
            'pnf_id' => '4',
            'semestre' => 1,
            'asignatura' => 'ingles',
            'ht' => 1,
            'hp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '4',
            'semestre' => 1,
            'asignatura' => 'matematicas',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '4',
            'semestre' => 1,
            'asignatura' => 'pensamiento critico',
            'ht' => 2,
            'hp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '4',
            'semestre' => 1,
            'asignatura' => 'actividades complementarias',
            'htp' => 2,
            'th' => 2,
            'uc' => 2,
        ]);


//================= CONSTRUCCION CIVIL ====================

        Semestral_malla::create([
            'pnf_id' => '5',
            'semestre' => 1,
            'asignatura' => 'lengua  warao',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '5',
            'semestre' => 1,
            'asignatura' => 'matematica',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '5',
            'semestre' => 1,
            'asignatura' => 'ingles tecnico',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '5',
            'semestre' => 1,
            'asignatura' => 'quimica',
            'ht' => 2,
            'hp' => 3,
            'th' => 5,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '5',
            'semestre' => 1,
            'asignatura' => 'fisica',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);
        
        Semestral_malla::create([
            'pnf_id' => '5',
            'semestre' => 1,
            'asignatura' => 'dibujo',
            'ht' => 2,
            'htp' => 2,
            'th' => 4,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '5',
            'semestre' => 1,
            'asignatura' => 'actividades complementarias',
            'htp' => 2,
            'th' => 2,
            'uc' => 1,
        ]);


//=================== ENFERMERIA ===========================

        Semestral_malla::create([
            'pnf_id' => '6',
            'semestre' => 1,
            'asignatura' => 'lengua warao',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 1,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'semestre' => 1,
            'asignatura' => 'Estudios e investigaciones',
            'ht' => 3,
            'th' => 3,
            'uc' => 3,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'semestre' => 1,
            'asignatura' => 'Desarrollo personal',
            'ht' => 2,
            'th' => 2,
            'uc' => 1,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'semestre' => 1,
            'asignatura' => 'Morfologia',
            'ht' => 2,
            'htp' => 4,
            'th' => 6,
            'uc' => 4,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'semestre' => 1,
            'asignatura' => 'Psicologia general',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'semestre' => 1,
            'asignatura' => 'Lengua y comunicacion',
            'ht' => 1,
            'htp' => 2,
            'th' => 3,
            'uc' => 2,
        ]);

        Semestral_malla::create([
            'pnf_id' => '6',
            'semestre' => 1,
            'asignatura' => 'Enfermeria basica',
            'ht' => 4,
            'hp' => 8,
            'th' => 12,
            'uc' => 6,
        ]);
    }
}
