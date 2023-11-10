<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Professor::create([
            'user_id' => '6',
            'titulo' => 'ingeniero en informatica',
            'componente_docente' => 'si',
            'pnf_recomendado' => 'informatica',
            'especializacion' => 'programacion',
        ]);

        Professor::create([
            'user_id' => '7',
            'titulo' => 'maestria en lenguas',
            'componente_docente' => 'si',
            'pnf_recomendado' => 'turismo',
            'especializacion' => 'ingles, warao',
        ]);

        Professor::create([
            'user_id' => '8',
            'titulo' => 'arquitecto',
            'componente_docente' => 'si',
            'pnf_recomendado' => 'construccion civil',
            'especializacion' => 'diseño de planos',
        ]);
    }
}
