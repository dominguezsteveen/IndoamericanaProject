<?php

namespace Database\Seeders;

use App\Models\Admin\AdminPrograma;
use Illuminate\Database\Seeder;

class AdminProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program = new AdminPrograma();
        $program->titulo = "Piloto Comercial";
        $program->img = "images/web/inicio/sections/programas/piloto-1080.png";
        $program->urlRedirect = "/";
        $program->descripcion = "Te encargaras de realizar la operación, control y desplazamiento de un avión o helicóptero, puede rediseñar la ruta y el patrón de vuelo de ser necesario, basado en las condiciones meteorológicas que encuentre durante el trayecto.";
        $program->orden = 1;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "AUXILIAR DE VUELO";
        $program->img = "images/web/inicio/sections/programas/AuxVuelo.jpeg";
        $program->urlRedirect = "/";
        $program->descripcion = "Vela por la seguridad de los pasajeros y atender situaciones de emergencia y salvamento, facilitar las provisiones y servicios necesarios del pasajero. También se desempeña como asesor Duty Free, servicios en counters, salas de embarque y otras…";
        $program->orden = 2;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "TEC. AERONÁUTICO";
        $program->img = "images/web/inicio/sections/programas/MECA-1080.png";
        $program->urlRedirect = "/";
        $program->descripcion = "Se encargará del mantenimiento de la parte estructural, los sistemas mecánicos, sistemas hidráulicos de las aeronaves entre otros, su función se desarrollará bajo los lineamientos y estándares que establecen los fabricantes y posterior las compañías de aviación.";
        $program->orden = 3;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "TEC. EN TURISMO";
        $program->img = "images/web/inicio/sections/programas/TURISMO-MUJER-1080.png";
        $program->urlRedirect = "/";
        $program->descripcion = "El egresado del programa Técnico en Turismo y Agencia de Viajes se encarga de desarrollar actividades de diseño, planeación, operación y comercialización de paquetes turísticos en Agencias de Viajes y empresas del sector turístico.";
        $program->orden = 4;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "DESPACHO DE AERONAVES";
        $program->img = "images/web/inicio/sections/programas/DESPACHO-1080-X-1080.png";
        $program->urlRedirect = "despacho-de-aeronaves";
        $program->descripcion = "Coordina todas las variables para asegurar que la operación de vuelo sea conducida bajo los parámetros de seguridad y eficiencia, autorizado para ejercer el control operacional, la planificación y ayuda en vuelo, podrá determina si un vuelo se lleva a cabo en términos operacionales y técnicos.";
        $program->orden = 5;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "FORMACIÓN CONTINUADA";
        $program->img = "images/web/inicio/sections/programas/CONTINUADA-1.png";
        $program->urlRedirect = "/";
        $program->descripcion = "Somos el centro  latinoamericano certificado para la formación aeronáutica, nuestras lineas de formación se basan en diplomados, especializaciones, adiciones, cursos, formación intermodal, entrenamiento trainer plus, seminarios y certificaciones bajo el reglamento aeronáutico";
        $program->orden = 6;
        $program->save();
    }
}
