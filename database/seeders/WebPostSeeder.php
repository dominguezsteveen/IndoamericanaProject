<?php

namespace Database\Seeders;

use App\Models\WebPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new WebPost();
        $post->titulo = "Piloto Comercial";
        $post->img = "images/web/inicio/sections/programas/piloto-1080.png";
        $post->urlRedirect = "/";
        $post->content = "Te encargaras de realizar la operación, control y desplazamiento de un avión o helicóptero, puede rediseñar la ruta y el patrón de vuelo de ser necesario, basado en las condiciones meteorológicas que encuentre durante el trayecto.";
        $post->orden = 1;
        $post->save();

        $post = new WebPost();
        $post->titulo = "AUXILIAR DE VUELO";
        $post->img = "images/web/inicio/sections/programas/AuxVuelo.jpeg";
        $post->urlRedirect = "/";
        $post->content = "Vela por la seguridad de los pasajeros y atender situaciones de emergencia y salvamento, facilitar las provisiones y servicios necesarios del pasajero. También se desempeña como asesor Duty Free, servicios en counters, salas de embarque y otras…";
        $post->orden = 2;
        $post->save();

        $post = new WebPost();
        $post->titulo = "TEC. AERONÁUTICO";
        $post->img = "images/web/inicio/sections/programas/MECA-1080.png";
        $post->urlRedirect = "/";
        $post->content = "Se encargará del mantenimiento de la parte estructural, los sistemas mecánicos, sistemas hidráulicos de las aeronaves entre otros, su función se desarrollará bajo los lineamientos y estándares que establecen los fabricantes y posterior las compañías de aviación.";
        $post->orden = 3;
        $post->save();

        $post = new WebPost();
        $post->titulo = "TEC. EN TURISMO";
        $post->img = "images/web/inicio/sections/programas/TURISMO-MUJER-1080.png";
        $post->urlRedirect = "/";
        $post->content = "El egresado del programa Técnico en Turismo y Agencia de Viajes se encarga de desarrollar actividades de diseño, planeación, operación y comercialización de paquetes turísticos en Agencias de Viajes y empresas del sector turístico.";
        $post->orden = 4;
        $post->save();

        $post = new WebPost();
        $post->titulo = "DESPACHO DE AERONAVES";
        $post->img = "images/web/inicio/sections/programas/DESPACHO-1080-X-1080.png";
        $post->urlRedirect = "/";
        $post->content = "Coordina todas las variables para asegurar que la operación de vuelo sea conducida bajo los parámetros de seguridad y eficiencia, autorizado para ejercer el control operacional, la planificación y ayuda en vuelo, podrá determina si un vuelo se lleva a cabo en términos operacionales y técnicos.";
        $post->orden = 5;
        $post->save();

        $post = new WebPost();
        $post->titulo = "FORMACIÓN CONTINUADA";
        $post->img = "images/web/inicio/sections/programas/CONTINUADA-1.png";
        $post->urlRedirect = "/";
        $post->content = "Somos el centro  latinoamericano certificado para la formación aeronáutica, nuestras lineas de formación se basan en diplomados, especializaciones, adiciones, cursos, formación intermodal, entrenamiento trainer plus, seminarios y certificaciones bajo el reglamento aeronáutico";
        $post->orden = 6;
        $post->save();
    }
}
