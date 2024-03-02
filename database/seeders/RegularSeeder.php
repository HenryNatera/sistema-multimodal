<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Regular;

class RegularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Regular::create([
            'regular_name' => 'matematicas',
            'malla' => 1,
            'user_id' => '6',
            'regular_modalidad' => '1',
            'regular_trayecto' => 2,
            'pnf_id' => 1,
            'periodo_id' => 1,
        ]);

        Regular::create([
            'regular_name' => 'ingles',
            'malla' => 1,
            'user_id' => '7',
            'regular_modalidad' => '1',
            'regular_trayecto' => 2,
            'pnf_id' => 2,
            'periodo_id' => 1,
        ]);

        Regular::create([
            'regular_name' => 'programacion',
            'malla' => 1,
            'user_id' => '8',
            'regular_modalidad' => '2',
            'regular_trayecto' => 2,
            'pnf_id' => 3,
            'periodo_id' => 1,
        ]);
    }
}
