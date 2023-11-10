<?php

namespace Database\Seeders;
use App\Models\Acreditable;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcreditableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Acreditable::create([
            'acreditable_name' => 'Ofimatica',
            'acreditable_profesor' => 'Henry Ofimatica',
            'acreditable_inscritos' => '0',
            'acreditable_modalidad' => 'presencial',
        ]);
        
        Acreditable::create([
            'acreditable_name' => 'Ajedrez',
            'acreditable_profesor' => 'Henry Ajedrez',
            'acreditable_inscritos' => '0',
            'acreditable_modalidad' => 'presencial',
        ]);
        
        Acreditable::create([
            'acreditable_name' => 'Cultura',
            'acreditable_profesor' => 'Henry Cultura',
            'acreditable_inscritos' => '0',
            'acreditable_modalidad' => 'mixta',
        ]);
    }
}
