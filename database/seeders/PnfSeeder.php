<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pnf;

class PnfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //============= TRIMESTRALES ========================

        Pnf::create([
            'malla_tipo' => 'trimestral',
            'pnf_name' => 'Informatica',
            'malla' => 1,
            'pnf_inicial' => 'I',
            'user_id' => '9',
        ]);

        Pnf::create([
            'malla_tipo' => 'trimestral',
            'pnf_name' => 'Administracion',
            'malla' => 1,
            'pnf_inicial' => 'A',
            'user_id' => '10',
        ]);

        Pnf::create([
            'malla_tipo' => 'trimestral',
            'pnf_name' => 'Agroalimentacion',
            'malla' => 1,
            'pnf_inicial' => 'Ag',
            'user_id' => '11',
        ]);

        Pnf::create([
            'malla_tipo' => 'trimestral',
            'pnf_name' => 'Fisioterapia',
            'malla' => 1,
            'pnf_inicial' => 'FT',
            'user_id' => '12',
        ]);

        Pnf::create([
            'malla_tipo' => 'trimestral',
            'pnf_name' => 'Terapia Ocupacional',
            'malla' => 1,
            'pnf_inicial' => 'TO',
            'user_id' => '16',
        ]);


        //============= SEMESTRALES ========================

        Pnf::create([
            'malla_tipo' => 'semestral',
            'pnf_name' => 'Turismo',
            'malla' => 1,
            'pnf_inicial' => 'T',
            'user_id' => '13',
        ]);

        Pnf::create([
            'malla_tipo' => 'semestral',
            'pnf_name' => 'Construccion Civil',
            'malla' => 1,
            'pnf_inicial' => 'CC',
            'user_id' => '14',
        ]);

        Pnf::create([
            'malla_tipo' => 'semestral',
            'pnf_name' => 'Enfermeria',
            'malla' => 1,
            'pnf_inicial' => 'Ef',
            'user_id' => '15',
        ]);

        Pnf::create([
            'malla_tipo' => 'semestral',
            'pnf_name' => 'Educacion Fisica y Deporte',
            'malla' => 1,
            'pnf_inicial' => 'Edf',
            'user_id' => '16',
        ]);
    }
}
