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
            'pnf_inicial' => 'I',
            'user_id' => '9',
        ]); 

        Pnf::create([
            'malla_tipo' => 'trimestral',
            'pnf_name' => 'Administracion',
            'pnf_inicial' => 'A',
            'user_id' => '10',
        ]);

        Pnf::create([
            'malla_tipo' => 'trimestral',
            'pnf_name' => 'Agroalimentacion',
            'pnf_inicial' => 'Ag',
            'user_id' => '11',
        ]);


//============= SEMESTRALES ========================

        Pnf::create([
            'malla_tipo' => 'semestral',
            'pnf_name' => 'Turismo',
            'pnf_inicial' => 'T',
            'user_id' => '12',
        ]);

        Pnf::create([ 
            'malla_tipo' => 'semestral',
            'pnf_name' => 'Construccion Civil',
            'pnf_inicial' => 'CC',
            'user_id' => '13',
        ]);

        Pnf::create([ 
            'malla_tipo' => 'semestral',
            'pnf_name' => 'Enfermeria',
            'pnf_inicial' => 'Ef',
            'user_id' => '14',
        ]);
    }
}
