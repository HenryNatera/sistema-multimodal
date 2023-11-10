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
            'pnf' => 'informatica',
            'trayecto' => '2',
            'student_cedula' => '27633694',
        ]);

        Student::create([
            'user_id' => '4',
            'pnf' => 'administracion',
            'trayecto' => '3',
            'student_cedula' => '26633694',
        ]);

        Student::create([
            'user_id' => '5',
            'pnf' => 'turismo',
            'trayecto' => '1',
            'student_cedula' => '25633694',
        ]);
    }
}
