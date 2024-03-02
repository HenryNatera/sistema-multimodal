<?php

namespace Database\Seeders;

use App\Models\Periodo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periodo::create([
            'carga' => 1,
            'solicitud' => 1,
            'resagada' => 1,
            'acreditable' => 1,
            'pasantia' => 1,
            'inscripcion' => 1,
            'cambio' => 1,
            'trimestre' => 1,
            'trimestral_lapso_inicio' => '2024-01-01',
            'trimestral_lapso_cierre' => '2024-02-14',
            'semestre' => 1,
            'semestral_lapso_inicio' => '2024-01-01',
            'semestral_lapso_cierre' => '2024-02-14',
            'lapso_trimestral' => 1,
            'lapso_semestral' => 1,
            'revision' => 1,
        ]);
    }
}
