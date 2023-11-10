<?php

namespace Database\Seeders;

use App\Models\Trimestral_malla;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Trimestral_mallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


//================ INFORMATICA ================================

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'Matematica',
            'trayecto' => 'i',
            'trimestre_i' => 'Logica',
            'uc_i' => 3,
            'trimestre_ii' => 'Eestadisticas y probabilidades',
            'uc_ii' => 3,
            'trimestre_iii' => 'Calculo',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'Arquitectura del computador',
            'trayecto' => 'i',
            'trimestre_i' => 'Estructura del computador',
            'uc_i' => 3,
            'trimestre_ii' => 'Sistemas operativos',
            'uc_ii' => 3,
            'trimestre_iii' => 'Mantenimiento de equipos de computacion',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'unidad_curricular' => 'Formacion Critica',
            'trayecto' => 'i',
            'trimestre_i' => 'cultura, deporte y recreacion',
            'uc_i' => 1,
            'trimestre_ii' => 'informatica, politica de estado y soberania',
            'uc_ii' => 1,
            'trimestre_iii' => 'informatica, politica de estado y soberania ii',
            'uc_iii' => 1,
        ]);


//================ ADMINISTRACION ================================

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'Proyecto',
            'trayecto' => 'i',
            'trimestre_i' => 'Identificar y conocer los procesos administrativos en distintas organizaciones',
            'uc_i' => 9,
            'trimestre_ii' => 'Identificar y conocer los procesos administrativos en distintas organizaciones',
            'uc_ii' => 9,
            'trimestre_iii' => 'Identificar y conocer los procesos administrativos en distintas organizaciones',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'Formación Socio-critica ',
            'trayecto' => 'i',
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'Contabilidad',
            'trayecto' => 'i',
            'uc_i' => 5,
            'uc_ii' => 5,
            'uc_iii' => 5,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'unidad_curricular' => 'Fundamentos de la Administración',
            'trayecto' => 'i',
            'uc_i' => 5,
            'uc_ii' => 5,
            'uc_iii' => 5,
        ]);


//================ AGROALIMENTACION ================================

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Proyecto Formativo',
        'trayecto' => 'i',
        'uc_i' => 6,
        'uc_ii' => 6,
        'uc_iii' => 6,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '2',
        'unidad_curricular' => 'Principios de agroecologia',
        'trayecto' => 'i',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Sociohistoria de la Agricultura Latinoamericana',
        'trayecto' => 'i',
        'uc_i' => 2,
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Biodiversidad y Sociodiversidad',
        'trayecto' => 'i',
        'uc_i' => 2,
    ]);

    
    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Calculo geometico avanzado',
        'trayecto' => 'i',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Principios de biologia',
        'trayecto' => 'i',
        'uc_i' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Matematica Aplicada',
        'trayecto' => 'i',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Fisica Aplicada',
        'trayecto' => 'i',
        'uc_ii' => 2,
    ]);
    
    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Quimica General Aplicada',
        'trayecto' => 'i',
        'uc_ii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Politicas y legislacion Agraria',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Botanica y Fisiologia vegetal',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Zoologia y Fisiologia Animal',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Maquinaria, Equipos e Implementos Agricolas',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    Trimestral_malla::create([
        'pnf_id' => '3',
        'unidad_curricular' => 'Principios de Bioquimica',
        'trayecto' => 'i',
        'uc_iii' => 2,
    ]);

    }
}
