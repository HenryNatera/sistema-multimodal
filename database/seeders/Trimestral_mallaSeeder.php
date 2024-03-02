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


        //================ INFORMATICA TRAYECTO I ================================

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'MATEMÁTICA I',
            'trayecto' => 1,
            'trimestre_i' => 'LÓGICA',
            'uc_i' => 3,
            'trimestre_ii' => 'ESTADÍSTICA Y PROBABILIDADES',
            'uc_ii' => 3,
            'trimestre_iii' => 'CALCULO I',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'ARQUITECTURA DEL COMPUTADOR',
            'trayecto' => 1,
            'trimestre_i' => 'ESTRUCTURA DEL COMPUTADOR',
            'uc_i' => 3,
            'trimestre_ii' => 'SISTEMAS OPERATIVOS I',
            'uc_ii' => 3,
            'trimestre_iii' => 'MANTENIMIENTO DE EQUIPOS DE COMPUTACIÓN',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'FORMACIÓN CRÍTICA I',
            'trayecto' => 1,
            'trimestre_i' => 'CULTURA, DEPORTE Y RECREACIÓN I',
            'uc_i' => 1,
            'trimestre_ii' => 'INFORMÁTICA, POLÍTICAS DE ESTADO Y SOBERANÍA I',
            'uc_ii' => 1,
            'trimestre_iii' => 'INFORMÁTICA, POLÍTICAS DE ESTADO Y SOBERANÍA II',
            'uc_iii' => 1,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'ALGORÍTMICA Y  PROGRAMACIÓN',
            'trayecto' => 1,
            'trimestre_i' => 'Algoritmia y Programción',
            'uc_i' => 4,
            'trimestre_ii' => 'Programación I',
            'uc_ii' => 4,
            'trimestre_iii' => 'Programación II',
            'uc_iii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'PROYECTO SOCIOTECNOLÓGICO I',
            'trayecto' => 1,
            'trimestre_i' => 'SOPORTE TÉCNICO A USUARIOS Y EQUIPOS I',
            'uc_i' => 3,
            'trimestre_ii' => 'SOPORTE TÉCNICO A USUARIOS Y EQUIPOS II',
            'uc_ii' => 3,
            'trimestre_iii' => 'informatica, politica de estado y soberania ii',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'ELECTIVA I',
            'trayecto' => 1,
            'trimestre_i' => 'DISEÑO INSTRUCCIONAL EN LAS TICS',
            'uc_i' => 3,
            'trimestre_ii' => 'CAPITAL INTELECTUAL Y RECURSOS HUMANOS',
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'IDIOMAS',
            'trayecto' => 1,
            'trimestre_i' => 'INGLÉS Y COMPRENSIÓN LECTORA  I',
            'uc_i' => 1,
            'trimestre_ii' => 'INGLÉS Y COMPRENSIÓN LECTORA  II',
            'uc_ii' => 1,
            'trimestre_iii' => 'INGLÉS Y COMPRENSIÓN LECTORA  III',
            'uc_iii' => 1,
        ]);

        //=========== INFORMÁTICA TRAYECTO II ==========//

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'MATEMÁTICA II',
            'trayecto' => 2,
            'trimestre_i' => 'CALCULO II',
            'uc_i' => 3,
            'trimestre_ii' => 'ALGEBRA LINEAL',
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'REDES DE COMPUTADORAS',
            'trayecto' => 2,
            'trimestre_i' => 'FUNDAMENTOS Y COMPONENTES DE REDES',
            'uc_i' => 3,
            'trimestre_ii' => 'ADMINISTRACIÓN, PRINCIPIOS DE ENRUTAMIENTO Y SUBREDES',
            'uc_ii' => 3,
        ]);


        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'FORMACIÓN CRÍTICA II',
            'trayecto' => 2,
            'trimestre_i' => 'INFORMÁTICA, TECNOLOGÍA Y SOCIEDAD I',
            'uc_i' => 1,
            'trimestre_ii' => 'INFORMÁTICA, TECNOLOGÍA Y SOCIEDAD II',
            'uc_ii' => 1,
            'trimestre_iii' => 'CULTURA, DEPORTE Y RECREACIÓN II',
            'uc_iii' => 1,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'PARADIGMAS DE PROGRAMACIÓN',
            'trayecto' => 2,
            'trimestre_i' => 'PROGRAMACIÓN III',
            'uc_i' => 4,
            'trimestre_ii' => 'PROGRAMACIÓN IV',
            'uc_ii' => 4,
            'trimestre_iii' => 'PROGRAMACIÓN V',
            'uc_iii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'PROYECTO SOCIOTECNOLÓGICO II',
            'trayecto' => 2,
            'trimestre_i' => 'DESARROLLO DE SOLUCIONES INFORMÁTICAS I',
            'uc_i' => 3,
            'trimestre_ii' => 'DESARROLLO DE SOLUCIONES INFORMÁTICAS II',
            'uc_ii' => 3,
            'trimestre_iii' => 'DESARROLLO DE SOLUCIONES  INFORMÁTICAS III',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'INGENIERÍA DEL SOFTWARE I',
            'trayecto' => 2,
            'trimestre_iii' => 'FUNDAMENTOS DE SISTEMAS E INGENIERÍA DEL SOFTWARE',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'BASE DE DATOS',
            'trayecto' => 2,
            'trimestre_i' => 'BASE DE DATOS',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'ELECTIVA II',
            'trayecto' => 2,
            'trimestre_iii' => 'VOZ, Y TELEFONÍA IP- EDUMÁTICA',
            'uc_iii' => 3,
        ]);


        //======== INFORMÁTICA TRAYECTO III =========//

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'MATEMÁTICA APLICADA',
            'trayecto' => 3,
            'trimestre_i' => 'ESTADÍSTICA Y PROBABILIDADES II',
            'uc_i' => 3,
            'trimestre_ii' => 'MATEMÁTICA DISCRETA',
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'INVESTIGACIÓN DE OPERACIONES',
            'trayecto' => 3,
            'trimestre_iii' => 'INVESTIGACIÓN DE OPERACIONES',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'SISTEMAS OPERATIVOS',
            'trayecto' => 3,
            'trimestre_i' => 'SISTEMAS OPERATIVOS II',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'FORMACIÓN CRÍTICA III',
            'trayecto' => 3,
            'trimestre_i' => 'CULTURA, DEPORTE Y RECREACIÓN III',
            'uc_i' => 1,
            'trimestre_ii' => 'INFORMÁTICA, COMUNICACIÓN Y TRANSFORMACIÓN I',
            'uc_ii' => 1,
            'trimestre_iii' => 'INFORMÁTICA, COMUNICACIÓN Y TRANSFORMACIÓN II',
            'uc_iii' => 1,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'INGENIERÍA DEL SOFTWARE II',
            'trayecto' => 3,
            'trimestre_i' => 'FUNDAMENTOS DE INGENIERÍA DE REQUISITOS Y ANÁLISIS',
            'uc_i' => 3,
            'trimestre_ii' => 'FUNDAMENTOS DEL DISEÑO DE SOFTWARE',
            'uc_ii' => 3,
            'trimestre_iii' => 'PRUEBAS Y VALIDACIÓN DE SOFTWARE',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'MODELADO DE BASE DE DATOS',
            'trayecto' => 3,
            'trimestre_iii' => 'MODELADO DE BASE DE DATOS',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'ELECTIVA III',
            'trayecto' => 3,
            'trimestre_ii' => 'COMUNICACIONES VÍA SATÉLITE - TECNOLOGÍAS INTERNET',
            'uc_ii' => 3,
        ]);


        //============== INFORMÁTICA TRAYECTO IV =================//

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'REDES AVANZADAS',
            'trayecto' => 4,
            'trimestre_i' => 'REDES DE TELECOMUNICACIONES Y DE DATOS',
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'FORMACIÓN CRÍTICA IV',
            'trayecto' => 4,
            'trimestre_i' => 'INFORMÁTICA, GLOBALIZACIÓN Y CULTURA I',
            'uc_i' => 1,
            'trimestre_ii' => 'INFORMÁTICA, GLOBALIZACIÓN Y CULTURA II',
            'uc_ii' => 1,
            'trimestre_iii' => 'CULTURA, DEPORTE Y RECREACIÓN IV',
            'uc_iii' => 1,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'SEGURIDAD INFORMÁTICA',
            'trayecto' => 4,
            'trimestre_i' => 'SEGURIDAD INFORMÁTICA',
            'uc_i' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'GESTIÓN DE PROYECTOS INFORMÁTICOS',
            'trayecto' => 4,
            'trimestre_ii' => 'GESTIÓN DE PROYECTOS INFORMÁTICOS',
            'uc_i' => 4,
            'trimestre_iii' => 'AUDITORÍA INFORMÁTICA',
            'uc_iii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'PROYECTO SOCIOTECNOLÓGICO IV',
            'trayecto' => 4,
            'trimestre_i' => 'GESTIÓN DE PROYECTOS I',
            'uc_i' => 3,
            'trimestre_ii' => 'GESTIÓN DE PROYECTOS II',
            'uc_ii' => 3,
            'trimestre_iii' => 'GESTIÓN DE PROYECTOS III',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'ADMINISTRACIÓN DE BASE DE DATOS',
            'trayecto' => 4,
            'trimestre_i' => 'ADMINISTRACIÓN DE BASE DE DATOS',
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'ELECTIVA IV',
            'trayecto' => 4,
            'trimestre_iii' => 'APLICACIONES MULTIMEDIA',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '1',
            'num' => 1,
            'unidad_curricular' => 'IDIOMAS',
            'trayecto' => 4,
            'trimestre_i' => 'CONVERSACIONAL I',
            'uc_i' => 3,
            'trimestre_ii' => 'CONVERSACIONAL II',
            'uc_ii' => 3,
            'trimestre_iii' => 'CONVERSACIONAL III',
            'uc_iii' => 3,
        ]);


        //================ ADMINISTRACION ================================

        //------- TRAYECTO I -----//

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PROYECTO I',
            'trayecto' => 1,
            'trimestre_i' => 'IDENTIFICAR Y CONOCER LOS PROCESOS ADMINISTRATIVOS EN DISTINTAS ORGANIZACIONES',
            'uc_i' => 9,
            'trimestre_ii' => 'IDENTIFICAR Y CONOCER LOS PROCESOS ADMINISTRATIVOS EN DISTINTAS ORGANIZACIONES',
            'uc_ii' => 9,
            'trimestre_iii' => 'IDENTIFICAR Y CONOCER LOS PROCESOS ADMINISTRATIVOS EN DISTINTAS ORGANIZACIONES',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'FORMACIÓN SOCIO-CRÍTICA I',
            'trayecto' => 1,
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'CONTABILIDAD I',
            'trayecto' => 1,
            'uc_i' => 5,
            'uc_ii' => 5,
            'uc_iii' => 5,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'FUNDAMENTOS DE LA ADMINISTRACIÓN',
            'trayecto' => 1,
            'uc_i' => 5,
            'uc_ii' => 5,
            'uc_iii' => 5,
        ]);


        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'EXPRESIÓN ORAL Y ESCRITA',
            'trayecto' => 1,
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'MARCO JURÍDICO I',
            'trayecto' => 1,
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'TECNOLOGÍA DE LA INFORMACIÓN Y COMUNICACIÓN',
            'trayecto' => 1,
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ESTADÍSTICA I',
            'trayecto' => 1,
            'uc_ii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'TEORÍA Y PRÁCTICA DEL MERCADEO',
            'trayecto' => 1,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ELECTIVA I',
            'trayecto' => 1,
            'trimestre_ii' => 'ÉTICA EN EL EJERCICIO PROFESIONAL DE LA ADMINISTRACIÓN',
            'uc_ii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'OPERACIONES FINANCIERAS',
            'trayecto' => 1,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'DEBERES FORMALES DEL CONTRIBUYENTE',
            'trayecto' => 1,
            'uc_ii' => 3,
        ]);


        //------ TRAYECTO II ------//

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PROYECTO II',
            'trayecto' => 2,
            'trimestre_i' => 'SUPERVISIÓN Y CONDUCCIÓN TÉCNICA DE LOS PROCESOS ADMINISTRATIVOS',
            'uc_i' => 9,
            'trimestre_ii' => 'SUPERVISIÓN Y CONDUCCIÓN TÉCNICA DE LOS PROCESOS ADMINISTRATIVOS',
            'uc_ii' => 9,
            'trimestre_iii' => 'SUPERVISIÓN Y CONDUCCIÓN TÉCNICA DE LOS PROCESOS ADMINISTRATIVOS',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'FORMACIÓN SOCIO-CRÍTICA II',
            'trayecto' => 2,
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'CONTABILIDAD II',
            'trayecto' => 2,
            'uc_i' => 5,
            'uc_ii' => 5,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ORGANIZACIÓN Y SISTEMA',
            'trayecto' => 2,
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PRESUPUESTO PÚBLICO Y PRIVADO',
            'trayecto' => 2,
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'GESTIÓN DE TALENTO HUMANO',
            'trayecto' => 2,
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'MARCO JURÍDICO II',
            'trayecto' => 2,
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'FUNDAMENTO DE ECONOMÍA',
            'trayecto' => 2,
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'DEBERES FORMALES AL CONTRIBUYENTE',
            'trayecto' => 2,
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ADMINISTRACIÓN DE COSTOS',
            'trayecto' => 2,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'GESTIÓN ECOLÓGICA AMBIENTAL',
            'trayecto' => 2,
            'uc_iii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ELECTIVA II',
            'trayecto' => 2,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'HABILIDADES DIRECTIVAS',
            'trayecto' => 2,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PRÁCTICA PROFESIONAL 120 HORAS',
            'trayecto' => 2,
            'uc_iii' => 0,
        ]);

        // ----- TRAYECTO III ------//


        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PROYECTO III',
            'trayecto' => 3,
            'trimestre_i' => 'PLANIFICACIÓN, DISEÑO, DESARROLLO E INNOVACIÓN DE SISTEMAS ADMINISTRATIVOS',
            'uc_i' => 9,
            'trimestre_ii' => 'PLANIFICACIÓN, DISEÑO, DESARROLLO E INNOVACIÓN DE SISTEMAS ADMINISTRATIVOS',
            'uc_ii' => 9,
            'trimestre_iii' => 'PLANIFICACIÓN, DISEÑO, DESARROLLO E INNOVACIÓN DE SISTEMAS ADMINISTRATIVOS',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'FORMACIÓN SOCIO-CRÍTICA III',
            'trayecto' => 3,
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ADMINISTRACIÓN DE COSTOS II',
            'trayecto' => 3,
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'CONTABILIDAD GUBERNAMENTAL',
            'trayecto' => 3,
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'SISTEMAS ADMINISTRATIVOS',
            'trayecto' => 3,
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PLANIFICACIÓN Y GESTIÓN',
            'trayecto' => 3,
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ESTADÍSTICA II',
            'trayecto' => 3,
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ADMINISTRACIÓN DE LA PRODUCCIÓN',
            'trayecto' => 3,
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ANÁLISIS E INTERPRETACIÓN DE ESTADOS FINANCIEROS',
            'trayecto' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ADMINISTRACIÓN DE MERCADEO',
            'trayecto' => 3,
            'uc_iii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ELECTIVA III',
            'trayecto' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'HABILIDADES DIRECTIVAS II',
            'trayecto' => 3,
            'uc_iii' => 3,
        ]);

        // ------ TRAYECTO IV ------//

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PROYECTO IV',
            'trayecto' => 4,
            'trimestre_i' => 'DIRECCIÓN, CONTROL Y EVALUACIÓN DE SISTEMAS ADMINISTRATIVOS.',
            'uc_i' => 9,
            'trimestre_ii' => 'DIRECCIÓN, CONTROL Y EVALUACIÓN DE SISTEMAS ADMINISTRATIVOS.',
            'uc_ii' => 9,
            'trimestre_iii' => 'DIRECCIÓN, CONTROL Y EVALUACIÓN DE SISTEMAS ADMINISTRATIVOS.',
            'uc_iii' => 9,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'FORMACIÓN SOCIO-CRÍTICA IV',
            'trayecto' => 4,
            'uc_i' => 4,
            'uc_ii' => 4,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ADMINISTRACIÓN FINANCIERA',
            'trayecto' => 4,
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'AUDITORÍA ADMINISTRATIVA',
            'trayecto' => 4,
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'INVESTIGACIÓN DE OPERACIONES',
            'trayecto' => 4,
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'CONTROL DE GESTIÓN ADMINISTRATIVO',
            'trayecto' => 4,
            'uc_i' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'GESTIÓN PÚBLICA',
            'trayecto' => 4,
            'uc_i' => 3,
            'uc_ii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'FORMULACIÓN Y EVALUACIÓN DE PROYECTO',
            'trayecto' => 4,
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PAQUETES INFORMÁTICOS APLICADOS A LA ADMINISTRACIÓN',
            'trayecto' => 4,
            'uc_ii' => 3,
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'ELECTIVA IV',
            'trayecto' => 1,
            'trimestre_ii' => 'PLANIFICACIÓN ESTRATÉGICA DE LOS RECURSOS HUMANOS',
            'uc_iii' => 3,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PRÁCTICA PROGESIONAL 120 HORAS',
            'trayecto' => 4,
            'uc_iii' => 0,
        ]);



        //================ AGROALIMENTACION ================================

        // -------- TRAYECTO I ------//

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'PROYECTO FORMATIVO I',
            'trayecto' => 1,
            'uc_i' => 6,
            'uc_ii' => 6,
            'uc_iii' => 6,
        ]);

        Trimestral_malla::create([
            'pnf_id' => '2',
            'num' => 1,
            'unidad_curricular' => 'PRINCIPIOS DE AGROECOLOGÍA',
            'trayecto' => 1,
            'uc_i' => 2,
            'uc_ii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'SOCIOISTORIA DE LA AGRICULTUTRA LATINOAMERICANA',
            'trayecto' => 1,
            'uc_i' => 2,
            'uc_ii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'BIODIVERSIDAD Y SOCIODIVERSIDAD',
            'trayecto' => 1,
            'uc_i' => 2,
        ]);


        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'CÁLCULO GEOMÉTRICO APLICADO',
            'trayecto' => 1,
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'PRINCIPIOS DE LA BIOLOGÍA',
            'trayecto' => 1,
            'uc_i' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'MATEMÁTICA APLICADA',
            'trayecto' => 1,
            'uc_ii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'FÍSICA APLICADA',
            'trayecto' => 1,
            'uc_ii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'QUIMICA GENERAL APLICADA',
            'trayecto' => 1,
            'uc_ii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'POLÍTICAS Y LEGISLACIÓN AGRARIA',
            'trayecto' => 1,
            'uc_iii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'BOTÁNICA Y FISIOLOGÍA VEGETAL',
            'trayecto' => 1,
            'uc_iii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'ZOOLOGÍA Y FISIOLOGÍA ANIMAL',
            'trayecto' => 1,
            'uc_iii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'MAQUINARIA, EQUIPOS E IMPLEMENTOS AGRÍCOLAS',
            'trayecto' => 1,
            'uc_iii' => 2,
        ]);

        Trimestral_malla::create([
            'pnf_id' => 3,
            'num' => 1,
            'unidad_curricular' => 'PRINCIPIOS DE BIOQUÍMICA',
            'trayecto' => 1,
            'uc_iii' => 2,
        ]);
    }
}

// ------ TRAYECTO II ------ //

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO FORMATIVO II',
    'trayecto' => 2,
    'uc_i' => 6,
    'uc_ii' => 6,
    'uc_iii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'TÉCNICAS Y METODOLOGÍAS AGROECOLÓGICAS',
    'trayecto' => 2,
    'uc_i' => 2,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'SISTEMAS DE PRODUCCIÓN VEGETAL',
    'trayecto' => 2,
    'uc_i' => 2,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'ALIMENTACIÓN Y NUTRICIÓN ANIMAL ALTERNATIVA',
    'trayecto' => 2,
    'uc_i' => 2,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'MICROBIOLOGÍA',
    'trayecto' => 2,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'ORGANIZACIONES SOCIOPRODUCTIVAS',
    'trayecto' => 2,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'AGROEPISTEMOLOGÍA',
    'trayecto' => 2,
    'uc_ii' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'MICROBOLOGÍA DE LOS ALIMENTOS',
    'trayecto' => 2,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'DISEMINACIÓN Y REPRODUCCIÓN DE ESPECIES VEGETALES',
    'trayecto' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'SUELO, ECOLOGÍA Y AGRICULTURA',
    'trayecto' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'REPRODUCCIÓN DE ESPECIES ANIMALES',
    'trayecto' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'TOPOGRAFÍA',
    'trayecto' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'AGROCLIMATOLOGÍA',
    'trayecto' => 2,
    'uc_iii' => 2,
]);

// ------ TRAYECTO III ------ //

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO FORMATIVO III',
    'trayecto' => 3,
    'uc_i' => 6,
    'uc_ii' => 6,
    'uc_iii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'GESTIÓN AGROECOLÓGICA',
    'trayecto' => 3,
    'uc_i' => 2,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'ANÁLISIS MATEMÁTICO',
    'trayecto' => 3,
    'uc_i' => 2,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'ECONOMÍA POLÍTICA Y SOCIAL',
    'trayecto' => 3,
    'uc_i' => 2,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'ESTADÍSTICA',
    'trayecto' => 3,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'MANEJO ECOLÓGICO DE INSECTOS Y ENFERMEDADES',
    'trayecto' => 3,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'SISTEMAS DE PRODUCCIÓN ANIMAL',
    'trayecto' => 3,
    'uc_ii' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'MANEJO SANITARIO ANIMAL',
    'trayecto' => 3,
    'uc_ii' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'ECONOMÍA ECOLÓGICA',
    'trayecto' => 3,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'SISTEMAS DE RIESGO Y DRENAJE',
    'trayecto' => 3,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'OPERACIONES BÁSICAS EN LA TRANSFORMACIÓN',
    'trayecto' => 3,
    'uc_iii' => 2,
]);

// ----- TRAYECTO IV ----//

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO FORMATIVO IV',
    'trayecto' => 4,
    'uc_i' => 6,
    'uc_ii' => 6,
    'uc_iii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'CIENCIA, TECNOLOGÍA Y SOCIEDAD',
    'trayecto' => 4,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'SISTEMAS DE INFORMACIÓN GEOGRÁFICA',
    'trayecto' => 4,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'ECORREGIONES',
    'trayecto' => 4,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'MEJORAMIENTO ANIMAL PARTICIPATIVO',
    'trayecto' => 4,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'ECOCONSTRUCCIONES',
    'trayecto' => 4,
    'uc_ii' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'PENSAMIENTO SOCIOPOLÍTICO LATINOAMERICANO',
    'trayecto' => 4,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'PLANIFICACIONES ECORREGIONAL',
    'trayecto' => 4,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'FITOMEJORAMIENTO PARTICIPATIVO',
    'trayecto' => 4,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'PEDAGOGÍA Y POLÍTICA',
    'trayecto' => 4,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'SISTEMAS INTEGRALES DE PRODUCCIÓN',
    'trayecto' => 4,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 3,
    'num' => 1,
    'unidad_curricular' => 'HIEGENE Y CONTROL DE CALIDAD DE LOS ALIMENTOS',
    'trayecto' => 4,
    'uc_iii' => 2,
]);


// ----- FISIOTERAPIA ------//

// ----- TRAYECTO I -----//

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO I',
    'trayecto' => 1,
    'trimestre_i' => 'INTRODUCCIÓN AL ABORDAJE COMUNITARIO EN FISIOTERAPIA',
    'uc_i' => 3,
    'trimestre_ii' => 'INTRODUCCIÓN AL ABORDAJE COMUNITARIO EN FISIOTERAPIA',
    'uc_ii' => 3,
    'trimestre_iii' => 'INTRODUCCIÓN AL ABORDAJE COMUNITARIO EN FISIOTERAPIA',
    'uc_iii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'ESTRUCTURAS Y FUNCIONES DEL CUERPO HUMANO',
    'trayecto' => 1,
    'uc_i' => 7,
    'uc_ii' => 7,
    'uc_iii' => 7,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'INTRODUCCIÓN A LAS TÉCNICAS Y TECNOLOGÍAS DE FISIOTERAPIA',
    'trayecto' => 1,
    'uc_i' => 5,
    'uc_ii' => 5,
    'uc_iii' => 5,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'CIUDADANÍA Y ACCIÓN SOCIAL',
    'trayecto' => 1,
    'uc_i' => 3,
    'uc_ii' => 3,
    'uc_iii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'BASES DEL CONOCIMIENTO CIENTÍFICO',
    'trayecto' => 1,
    'uc_i' => 3,
    'uc_ii' => 3,
    'uc_iii' => 3,
]);

// ----- TRAYECTO II -----//

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'ALTETACIONES DE LAS ESTRUCTURAS Y FUNCIONES DEL CUERPO HUMANO',
    'trayecto' => 2,
    'uc_i' => 4,
    'uc_ii' => 4,
    'uc_iii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'TÉCNICAS Y TECNOLOGÍAS DE FISIOTERAPIA',
    'trayecto' => 2,
    'uc_i' => 5,
    'uc_ii' => 5,
    'uc_iii' => 5,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'ACCIÓN SOCIAL, SALUD Y DISCAPACIDAD',
    'trayecto' => 2,
    'uc_i' => 3,
    'uc_ii' => 3,
    'uc_iii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO II',
    'trayecto' => 2,
    'trimestre_i' => 'PROMOCIÓN DEL FUNCIONAMIENTO HUMANO Y PREVENCIÓN DE LA DISCAPACIDAD',
    'uc_i' => 3,
    'trimestre_ii' => 'PROMOCIÓN DEL FUNCIONAMIENTO HUMANO Y PREVENCIÓN DE LA DISCAPACIDAD',
    'uc_ii' => 3,
    'trimestre_iii' => 'PROMOCIÓN DEL FUNCIONAMIENTO HUMANO Y PREVENCIÓN DE LA DISCAPACIDAD',
    'uc_iii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'FUNDAMENTOS ESTADÍSTICOS Y EPIDEMIOLÓGICOS EN SALUD',
    'trayecto' => 2,
    'uc_i' => 2,
    'uc_ii' => 2,
    'uc_iii' => 2,
]);

// ----- TRAYECTO III ------//

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'ESTRUCTURAS, FUNCIONES Y ALTERACIONES DEL CUERPO HUMANO',
    'trayecto' => 3,
    'uc_i' => 5,
    'uc_ii' => 5,
    'uc_iii' => 5,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'TÉCNICAS Y TECNOLOGÍAS INTEGRALES EN FISIOTERAPIA',
    'trayecto' => 3,
    'uc_i' => 4,
    'uc_ii' => 4,
    'uc_iii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'ORIENTACIÓN, POLÍTICA E INTEGRACIÓN PSICOSOCIAL',
    'trayecto' => 3,
    'uc_i' => 2,
    'uc_ii' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO III',
    'trayecto' => 3,
    'trimestre_i' => 'ATENCIÓN INTEGRAL A PERSONAS CON DISCAPACIDAD',
    'uc_i' => 3,
    'trimestre_ii' => 'ATENCIÓN INTEGRAL A PERSONAS CON DISCAPACIDAD',
    'uc_ii' => 3,
    'trimestre_iii' => 'ATENCIÓN INTEGRAL A PERSONAS CON DISCAPACIDAD',
    'uc_iii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'ABORDAJE COMUNITARIO Y ATENCIÓN A LA DIVERSIDAD',
    'trayecto' => 3,
    'uc_i' => 2,
    'uc_ii' => 2,
    'uc_iii' => 2,
]);

// ----- TRAYECTO IV ------//

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'ESTRUCTURAS, FUNCIONES Y DIAGNÓSTICO DE LAS ALTERACIONES DEL CUERPO HUMANO',
    'trayecto' => 4,
    'uc_i' => 3,
    'uc_ii' => 3,
    'uc_iii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'TÉCNICAS Y TECNOLOGÍAS ESPECIALIZADAS DE FISIOTERAPIA',
    'trayecto' => 4,
    'uc_i' => 4,
    'uc_ii' => 4,
    'uc_iii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'ORIENTACIÓN E INTEGRACIÓN SOCIOAMBIENTAL',
    'trayecto' => 4,
    'uc_i' => 2,
    'uc_ii' => 2,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO IV',
    'trayecto' => 4,
    'trimestre_i' => 'GESTIÓN ESPECIALIZADA EN FISIOTERAPIA',
    'uc_i' => 3,
    'trimestre_ii' => 'GESTIÓN ESPECIALIZADA EN FISIOTERAPIA',
    'uc_ii' => 3,
    'trimestre_iii' => 'GESTIÓN ESPECIALIZADA EN FISIOTERAPIA',
    'uc_iii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 4,
    'num' => 1,
    'unidad_curricular' => 'GESTIÓN INTEGRA DE LOS SISTEMAS DE SALUD Y ATENCIÓN A LA DIVERSIDAD',
    'trayecto' => 4,
    'uc_i' => 4,
    'uc_ii' => 4,
    'uc_iii' => 4,
]);

// -------- TERAPIA OCUPACIONAL -----//

// ---- TRAYECTO I ----// 

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'SISTEMA OSTEOMIOARTICULAR Y SU FISIOLOGÍA',
    'trayecto' => 1,
    'uc_i' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'FUNDAMENTOS TEÓRICOS DE LA TERAPIA OCUPACIONAL',
    'trayecto' => 1,
    'uc_i' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'POLÍTICAS PÚBLICAS',
    'trayecto' => 1,
    'uc_i' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ÉTICA Y DEONTOLOGÍA EN TERAPIA OCUPACIONAL',
    'trayecto' => 1,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'BIOESTADÍSTICA',
    'trayecto' => 1,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'INTRODUCCIÓN A LA EPIDEMIOLOGÍA',
    'trayecto' => 1,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO I: ABORDAJE COMUNITARIO PARA LA PROMOCIÓN DE LA OCUPACIÓN HUMANA',
    'trayecto' => 1,
    'uc_i' => 6,
    'uc_ii' => 6,
    'uc_iii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'SISTEMA NERVIOSO Y SU FISIOLOGÍA',
    'trayecto' => 1,
    'uc_ii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ANALISIS DEL MOVIMIENTO HUMANO',
    'trayecto' => 1,
    'uc_ii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'METODOS DE ORGANIZACIÓN Y PARTICIPACIÓN COMUNITARIA',
    'trayecto' => 1,
    'uc_ii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'FUNDAMENTOS DE INVESTIGACIÓN EN SALUD PÚBLICA',
    'trayecto' => 1,
    'uc_ii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'SISTEMA CARDIORESPIRATORIO, SISTEMA METABÓLICO E INMUNOLÓGICO Y SU FISIOLOGÍA',
    'trayecto' => 1,
    'uc_iii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ANALISIS DEL DESEMPEÑO OCUPACIONAL',
    'trayecto' => 1,
    'uc_iii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PRACTICA PROFESIONAL I',
    'trayecto' => 1,
    'uc_iii' => 10,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ASPECTOS TEÓRICOS TECNOLÓGICOS DE LA COMUNICACIÓN',
    'trayecto' => 1,
    'uc_iii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'INGLES INSTRUMENTAL',
    'trayecto' => 1,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'EPIDEMIOLOGÍA DESCRIPTIVA',
    'trayecto' => 1,
    'uc_iii' => 4,
]);

//---- TRAYECTO II ----//

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ALTERACIONES EN LAS ESTRUCTURAS NEUROMUSCULARES ESQUELÉTICAS DE ORIGEN PERIFÉRICO',
    'trayecto' => 2,
    'uc_i' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ALTERACIONES EN LAS ESTRUCTURAS NEUROMUSCULARES ESQUELÉTICAS DE ORIGEN PERIFÉRICO',
    'trayecto' => 2,
    'uc_i' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PRÁCTICA PROFESIONAL II',
    'trayecto' => 2,
    'uc_i' => 7,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PSICOLOGÍA GENERAL',
    'trayecto' => 2,
    'uc_i' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'COMUNICACIÓN Y DISCAPACIDAD',
    'trayecto' => 2,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'EPIDEMIOLOGÍA ANALÍTICA I',
    'trayecto' => 2,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO II: INTERVENCIÓN EN LAS DISFUNCIONES MOTORAS Y MENTALES',
    'trayecto' => 2,
    'uc_i' => 6,
    'uc_ii' => 6,
    'uc_iii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ALTERACIONES DE LAS FUNCIONES MENTALES Y SU IMPACTO EN LA OCUPACIÓN',
    'trayecto' => 2,
    'uc_ii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'INTERV. EN LAS DIFUNCIONES POR ALTERACIONES DE LAS FUNCIONES MENTALES',
    'trayecto' => 2,
    'uc_ii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PRACTICA PROFESIONAL III',
    'trayecto' => 2,
    'uc_ii' => 7,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ATENCIÓN COMUNITARIA PARA PERSONAS CON Y SIN DISCAPACIDAD I',
    'trayecto' => 2,
    'uc_ii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'EPIDEMIOLOGÍA ANALÍTICA II',
    'trayecto' => 2,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ALTERAC. DE LA FUNCION DEL SIST. CARDIORESPIRATORIO, SIST. METABOLICO E INMUNOLÓGICO',
    'trayecto' => 2,
    'uc_iii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'INTERV. EN LAS DISFUNC. POR ALT. DE LAS FUNC. DE LOS SIST. CARDIORESP., METABÓLICO, INMUNO',
    'trayecto' => 2,
    'uc_ii' => 5,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PRACTICA PROFESIONAL IV',
    'trayecto' => 2,
    'uc_ii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ATENCION COMUNITARIA PARA PERSONAS CON Y SIN DISCAPACIDAD II',
    'trayecto' => 2,
    'uc_ii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'EPIDEMIOLOGÍA ANALÍTICA III',
    'trayecto' => 2,
    'uc_iii' => 2,
]);

// ----- TRAYECTO III -----//

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ALTERACIONES DE LA FUNCION SENSORIAL Y DEL DOLOR',
    'trayecto' => 3,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ANALISIS E INTERVENCIÓN DE LA OCUPACIÓN HUMANA',
    'trayecto' => 3,
    'uc_i' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PRACTICA PROFESIONAL V',
    'trayecto' => 3,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PSICOLOGÍA EVOLUTIVA',
    'trayecto' => 3,
    'uc_i' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'GESTIÓN DE LA INFROMACIÓN EPIDEMIOLÓGICA',
    'trayecto' => 3,
    'uc_i' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO III: ATENCIÓN INTEGRAL AL DESEMPEÑO OCUPACIONAL',
    'trayecto' => 3,
    'uc_i' => 6,
    'uc_ii' => 6,
    'uc_iii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ALTERACIONES DE LAS FUNCIONES NEUROMUSCULOESQUELETICAS DE ORIGEN CENTRAL',
    'trayecto' => 3,
    'uc_ii' => 5,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ATENCIÓN INTEGLA DE LAS DISFUNCIONES NEUROMUSCULOESQUELETICAS DE ORIGEN CENTRAL',
    'trayecto' => 3,
    'uc_ii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PRÁCTICA PROFESIONAL VI',
    'trayecto' => 3,
    'uc_ii' => 7,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DIVERSIDAD CULTURAL Y CIUDADANÍA',
    'trayecto' => 3,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'EPIDEMIOLOGÍA CRÍTICA',
    'trayecto' => 3,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DEPORTE, RECREACIÓN Y SALUD',
    'trayecto' => 3,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ALTERACIONES DE LAS FUNCIONES MENTALES EN EL NIÑO Y EL ADOLESCENTE',
    'trayecto' => 3,
    'uc_iii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ATENCIÓN INTEGRAL DE LAS DISFUNCIONES PSICOSOCIALES DE LA NIÑES Y ADOLESCENCIA',
    'trayecto' => 3,
    'uc_iii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ALTERACIONES DE LAS FUNCIONES MENTALES EN EL NIÑO Y EL ADOLESCENTE',
    'trayecto' => 3,
    'uc_iii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'EVOLUCIÓN DEL TRABAJO',
    'trayecto' => 3,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'NORMATIVA EN EL AREA DE LA DISCAPACIDAD',
    'trayecto' => 3,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'NORMATIVA EN EL AREA DE LA DISCAPACIDAD',
    'trayecto' => 3,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'EPIDEMIOLOGÍA EN LA PLANIFICACIÓN DE SALUD',
    'trayecto' => 3,
    'uc_iii' => 2,
]);

//-------------- TRAYECTO IV -----------------//

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DISFUNCIONES DE LAS HABILIDADES MOTORAS Y PSICOMOTRICIDAD EN NIÑO Y ADOLESCENTES',
    'trayecto' => 4,
    'uc_i' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DIAGNÓSTICO E INTERVENCION OCUPACIONES EN LA NIÑEZ Y LA ADOLESCENCIA',
    'trayecto' => 4,
    'uc_i' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PRÁCTICA PROFESIONAL ESPECIALIZADA I',
    'trayecto' => 4,
    'uc_i' => 7,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ACCESIBILIDAD AL MEDIO FISICO',
    'trayecto' => 4,
    'uc_i' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PROTECCIÓN Y SEGURIDAD SOCIAL',
    'trayecto' => 4,
    'uc_i' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DISEÑO DE PROYECTOS, PROGRAMAS Y PLANES DE INTERVENCIÓN',
    'trayecto' => 4,
    'uc_i' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PROYECTO IV: GESTIÓN ESPECIALIZADA EN TERAPIA OCUPACIONAL',
    'trayecto' => 4,
    'uc_i' => 6,
    'uc_ii' => 6,
    'uc_iii' => 6,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DISFUNCIONES DE LAS HABILIDADES MOTORAS Y LA PSICOMOTRICIDAD EN EL ESCOLAR',
    'trayecto' => 4,
    'uc_ii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DIAGNÓSTICO E INTERVENCIÓN OCUPACIONAL EN EL ESCOLAR',
    'trayecto' => 4,
    'uc_ii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PRÁCTICA PROFESIONAL ESPECIALIZADA II',
    'trayecto' => 4,
    'uc_ii' => 7,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'ADMINISTRACIÓN DE SERVICIOS DE SALUD DE TERAPIA OCUPACIONAL',
    'trayecto' => 4,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'BIOSEGURIDAD',
    'trayecto' => 4,
    'uc_ii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DISFUNCIONES DEL SISTEMA LOCOMOTOR EN EL TRABAJADOR  Y RIESGO DISERGONÓMICO',
    'trayecto' => 4,
    'uc_iii' => 3,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DAGNÓSTICO DE INTERVENCIÓN EN EL TRABAJADOR',
    'trayecto' => 4,
    'uc_iii' => 4,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PRACTICA PROFESIONAL ESPECIALIZADA III',
    'trayecto' => 4,
    'uc_iii' => 7,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'PROTECCIÓN Y SEGURIDAD SOCIOLABORAL',
    'trayecto' => 4,
    'uc_iii' => 2,
]);

Trimestral_malla::create([
    'pnf_id' => 5,
    'num' => 1,
    'unidad_curricular' => 'DESARROLLO DEL PROYECTO',
    'trayecto' => 4,
    'uc_iii' => 2,
]);
