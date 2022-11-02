<?php

namespace Database\Seeders;

use App\Models\Web\WebMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new WebMenu();
        $menu->titulo = "Inicio";
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Programas Académicos";
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "C.E.I";
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Admisiones";
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Financiación";
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Estudiantes";
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Egresados";
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "ED. Continuada";
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Contacto";
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Aviación";
        $menu->padre_id = 2;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Turismo";
        $menu->padre_id = 2;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Transporte Terrestre";
        $menu->padre_id = 2;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Piloto Comercial de Avión (PCA)";
        $menu->padre_id = 10;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Auxiliar de Servicio a Bordo (ASA-TCP)";
        $menu->padre_id = 10;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Despachador de Vuelo (DPA)";
        $menu->padre_id = 10;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Técnico de Línea de Aviones (TLA)";
        $menu->padre_id = 10;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Técnico de Línea de Helicópteros (TLH)";
        $menu->padre_id = 10;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Técnico en Turismo y Agencias de Viajes (ATA)";
        $menu->padre_id = 11;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Técnico en Conductor de Transporte de Pasajeros y Carga";
        $menu->padre_id = 12;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Quiénes somos";
        $menu->padre_id = 3;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Servicios CEI";
        $menu->padre_id = 3;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Visitas a Colegios";
        $menu->padre_id = 3;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Prevención COVID-19";
        $menu->padre_id = 3;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Vitrina Aeronáutica";
        $menu->padre_id = 3;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Institución";
        $menu->padre_id = 20;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Recursos Locativos";
        $menu->padre_id = 20;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Normatividad";
        $menu->padre_id = 20;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Encuesta de Bioseguridad";
        $menu->padre_id = 21;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Bienestar";
        $menu->padre_id = 21;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Nosotros";
        $menu->padre_id = 25;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Certificaciones";
        $menu->padre_id = 25;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Condecoraciones";
        $menu->padre_id = 25;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Sede Principal";
        $menu->padre_id = 26;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Sede Hangar";
        $menu->padre_id = 26;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Manual General Directivas de Instrucción";
        $menu->padre_id = 27;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Política de tratamiento de datos personales";
        $menu->padre_id = 27;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Brochure Institucional";
        $menu->padre_id = 27;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Programas Académicos";
        $menu->padre_id = 4;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "1. Inscripción";
        $menu->padre_id = 4;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "2. Radicación";
        $menu->padre_id = 4;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "3. Admisión";
        $menu->padre_id = 4;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "4. Matrícula";
        $menu->padre_id = 4;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Aviación";
        $menu->padre_id = 38;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Turismo";
        $menu->padre_id = 38;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Transporte Terrestre";
        $menu->padre_id = 38;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Piloto Comercial de Avión (PCA)";
        $menu->padre_id = 43;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Auxiliar de Servicio a Bordo (ASA-TCP)";
        $menu->padre_id = 43;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Despachador de Vuelo (DPA)";
        $menu->padre_id = 43;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Técnico en Línea de Aviones (TLA)";
        $menu->padre_id = 43;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Técnico en Línea de Helicópteros (TLH)";
        $menu->padre_id = 43;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Técnico en Turismo y Agencias de Viajes (ATA)";
        $menu->padre_id = 44;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Técnico en Conductor de Transporte de Pasajeros y Carga";
        $menu->padre_id = 45;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "¿Por Qué Estudiar Aviación en Indoamericana?";
        $menu->padre_id = 39;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Formulario de inscripción";
        $menu->padre_id = 39;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Proceso de Inscripción";
        $menu->padre_id = 40;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Subir documentos";
        $menu->padre_id = 40;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Recibo derechos de admisión";
        $menu->padre_id = 40;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Resultados de Admisión";
        $menu->padre_id = 41;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Descargar Recibo de Pago";
        $menu->padre_id = 42;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Cómo legalizar matrícula";
        $menu->padre_id = 42;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Legalizar matrícula";
        $menu->padre_id = 42;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Uniformes";
        $menu->padre_id = 42;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Formas de Pago";
        $menu->padre_id = 5;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Financieras";
        $menu->padre_id = 5;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Convenio – Descuentos";
        $menu->padre_id = 5;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Calendario académico";
        $menu->padre_id = 6;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Punto de Atención a Estudiantes PAE";
        $menu->padre_id = 6;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Documentación importante";
        $menu->padre_id = 6;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Encuesta de Bioseguridad";
        $menu->padre_id = 6;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Encuesta actualización de datos";
        $menu->padre_id = 6;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Formación Humana";
        $menu->padre_id = 6;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Sistema Académico";
        $menu->padre_id = 67;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Correo Institucional";
        $menu->padre_id = 67;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Aula Virtual";
        $menu->padre_id = 67;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Dexway";
        $menu->padre_id = 67;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Trámites Académicos";
        $menu->padre_id = 67;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Como subir una excusa médica";
        $menu->padre_id = 67;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Consulte Usuario Sistema";
        $menu->padre_id = 67;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Descripción";
        $menu->padre_id = 74;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Ingresar";
        $menu->padre_id = 74;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Descripción Plataforma WhatElse";
        $menu->padre_id = 75;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Ingresar";
        $menu->padre_id = 75;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Manual de Convivencia";
        $menu->padre_id = 68;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "RAC - Reglamentos Aeronáuticos de Colombia";
        $menu->padre_id = 68;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Publicación Información Aeronáutica - AIP";
        $menu->padre_id = 68;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "INDEIN (Investigación, Desarrollo e Innovación)";
        $menu->padre_id = 68;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Revista A'ris";
        $menu->padre_id = 68;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Mediateca";
        $menu->padre_id = 68;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Registro de Nuevo Egresado";
        $menu->padre_id = 7;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Solicitud de Pasantes para su Empresa";
        $menu->padre_id = 7;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Inscripción a Examen Práctico Fuerzas Militares";
        $menu->padre_id = 7;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Inscripción a Examen Práctico";
        $menu->padre_id = 7;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Convenios de pasantía";
        $menu->padre_id = 7;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Básico “Piloto de Aeronaves No Tripuladas – RPAS”";
        $menu->padre_id = 8;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Programación Educación Continuada 2022";
        $menu->padre_id = 8;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "TRAINAIR PLUS";
        $menu->padre_id = 8;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Adiciones y Recurrentes";
        $menu->padre_id = 8;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Especialidades";
        $menu->padre_id = 8;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Diplomados";
        $menu->padre_id = 8;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Transporte Intermodal";
        $menu->padre_id = 8;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Certificado Seminario Reglamento Aeronáutico";
        $menu->padre_id = 8;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Nosotros";
        $menu->padre_id = 96;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Cursos";
        $menu->padre_id = 96;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Cronograma";
        $menu->padre_id = 96;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Brochure";
        $menu->padre_id = 96;
        $menu->save();

        $menu = new WebMenu();
        $menu->titulo = "Galería Multimedia";
        $menu->padre_id = 96;
        $menu->save();
    }
}
