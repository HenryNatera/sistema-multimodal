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
            'trayecto' => 'ii',
            'periodo_id' => 1,
            'turno' => 0,
            'student_cedula' => '27633694',
        ]);

        Student::create([
            'user_id' => '4',
            'pnf_id' => '2',
            'trayecto' => 'iii',
            'periodo_id' => 1,
            'turno' => 0,
            'student_cedula' => '26633694',
        ]);

        Student::create([
            'user_id' => '5',
            'pnf_id' => '3',
            'trayecto' => 'i',
            'periodo_id' => 1,
            'turno' => 1,
            'student_cedula' => '25633694',
        ]);
    }
}
