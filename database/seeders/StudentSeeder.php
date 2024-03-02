<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'user_id' => '3',
            'pnf_id' => '1',
            'malla' => 1,
            'trayecto' => 2,
            'turno' => 0,
            'confirm' => 0,
            'student_cedula' => '27633694',
        ]);

        Student::create([
            'user_id' => '4',
            'pnf_id' => '2',
            'malla' => 1,
            'trayecto' => 3,
            'turno' => 0,
            'confirm' => 0,
            'student_cedula' => '26633694',
        ]);

        Student::create([
            'user_id' => '5',
            'pnf_id' => '3',
            'malla' => 1,
            'trayecto' => 1,
            'turno' => 1,
            'confirm' => 0,
            'student_cedula' => '25633694',
        ]);
    }
}
