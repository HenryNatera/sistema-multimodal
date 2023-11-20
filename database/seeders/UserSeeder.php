<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Henry',
            'last_name' => 'Natera',
            'cedula' => '28633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Master');

        User::create([
            'name' => 'Henry',
            'last_name' => 'Acreditable',
            'cedula' => '29633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Acreditable');


        //======== ESTUDIANTES ============ 3

        User::create([
            'name' => 'Estudiante',
            'last_name' => 'Uno',
            'cedula' => '27633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Estudiante');
        
        User::create([
            'name' => 'Estudiante',
            'last_name' => 'Dos',
            'cedula' => '26633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Estudiante');

        User::create([
            'name' => 'Estudiante',
            'last_name' => 'Tres',
            'cedula' => '25633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Estudiante');


        //=========== PROFESORES ================= 6

        User::create([
            'name' => 'Profesor',
            'last_name' => 'Uno',
            'cedula' => '18633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Profesor');
        
        User::create([
            'name' => 'Profesor',
            'last_name' => 'Dos',
            'cedula' => '19633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Profesor');
        
        User::create([
            'name' => 'Profesor',
            'last_name' => 'Tres',
            'cedula' => '19733694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Profesor');


        //========== COORDINADORES ============ 9

        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Informatica',
            'cedula' => '48633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');

        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Administracion',
            'cedula' => '49633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');
        
        User::create([
            'name' => 'Coordiandor',
            'last_name' => 'Agroalimentacion',
            'cedula' => '47633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');

        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Turismo',
            'cedula' => '8633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');

        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Construccion civil',
            'cedula' => '9633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');
        
        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Enfermeria',
            'cedula' => '7633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');

        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Ocho',
            'cedula' => '38633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');

        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Nueve',
            'cedula' => '39633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');
        
        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Diez',
            'cedula' => '37633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');

        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Once',
            'cedula' => '36633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');

        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Doce',
            'cedula' => '35633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');
        
        User::create([
            'name' => 'Coordinador',
            'last_name' => 'Trece',
            'cedula' => '34633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Coordinador');

        //========== DOCENCIA ============ 12

        User::create([
            'name' => 'Docencia',
            'last_name' => 'uno',
            'cedula' => '52633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Docencia');

        User::create([
            'name' => 'Docencia',
            'last_name' => 'uno',
            'cedula' => '42633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Docencia');
        
        User::create([
            'name' => 'Docencia',
            'last_name' => 'uno',
            'cedula' => '41633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Docencia');

        //========== Academica ============ 12

        User::create([
            'name' => 'Academica',
            'last_name' => 'uno',
            'cedula' => '72633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Academica');

        User::create([
            'name' => 'Academica',
            'last_name' => 'uno',
            'cedula' => '79633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Academica');
        
        User::create([
            'name' => 'Academica',
            'last_name' => 'uno',
            'cedula' => '71633694',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('Academica');

        //========== CONTROL ESTUDIO ============ 12

        User::create([
            'name' => 'Control',
            'last_name' => 'Henry',
            'cedula' => '1063369',
            'password' => bcrypt('mamalucas2000'),
            'status' => 0,
            'genero' => 'masculino',
        ])->assignRole('ControlEstudio');

        //========== ESTUDIANTES 2 ===============

        User::factory()->count(60)->create();
    }

}
