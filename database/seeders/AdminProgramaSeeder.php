<?php

namespace Database\Seeders;

use App\Models\Admin\AdminPrograma;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        $program->meta_titulo = "Piloto Comercial de Avión (PCA)";
        $program->img = "images/web/inicio/sections/programas/2022/Piloto";
        $program->urlRedirect = Str::slug($program->titulo);
        $program->descripcion = "Te encargaras de realizar la operación, control y desplazamiento de un avión o helicóptero, puede rediseñar la ruta y el patrón de vuelo de ser necesario, basado en las condiciones meteorológicas que encuentre durante el trayecto.";
        $program->content = '<p><em>Se encarga de realizar la operaci&oacute;n, control y desplazamiento de un avi&oacute;n o helic&oacute;ptero, puede redise&ntilde;ar la ruta y el patr&oacute;n de vuelo de ser necesario, basado en las condiciones meteorol&oacute;gicas que encuentre durante el trayecto.</em></p>

        <p><em>El piloto comercial est&aacute; habilitado para sacar un provecho econ&oacute;mico de las operaciones de vuelo que realiza, quiere decir que podr&iacute;a volar en una Aerol&iacute;nea y transportar grandes cantidades de pasajeros en todas las rutas que dicha aerol&iacute;nea cubra.</em></p>
        
        <p><em><strong><span style="color:#f1c40f">Duraci&oacute;n:</span>&nbsp;</strong>1 semestre<br />
        <strong><span style="color:#f1c40f">Jornada:</span>&nbsp;</strong>&Uacute;nica (8:00am &ndash; 5:00pm)</em></p>';
        $program->orden = 1;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "AUXILIAR DE VUELO";
        $program->meta_titulo = "AUXILIAR DE SERVICIOS ABORDO Y AEROPORTUARIOS";
        $program->img = "images/web/inicio/sections/programas/2022/ASA-HOMBRE-MUJER-1080";
        $program->urlRedirect = Str::slug($program->titulo);
        $program->descripcion = "Vela por la seguridad de los pasajeros y atender situaciones de emergencia y salvamento, facilitar las provisiones y servicios necesarios del pasajero. También se desempeña como asesor Duty Free, servicios en counters, salas de embarque y otras…";
        $program->content = '<p><em>Las atribuciones del titular de la licencia ASA, son: Atender y auxiliar a las personas abordo, facilitar las provisiones y servicios necesarios, procurar el mayor confort del pasajero y colaborar con la tripulaci&oacute;n en las situaciones de emergencia y salvamiento.</em></p>

        <p><em><strong><span style="color:#f1c40f">Duraci&oacute;n:</span>&nbsp;</strong>4 Niveles<br />
        <span style="color:#f1c40f"><strong>Jornadas:&nbsp;</strong></span>Ma&ntilde;ana, Tarde y Noche</em><br />
        &nbsp;</p>
        
        <h3><em><strong><span style="color:#f1c40f">Triple titulaci&oacute;n</span></strong></em></h3>
        
        <p><em>Puede realizar la homologaci&oacute;n a T&eacute;cnico en turismo y agencias de viaje ATA o a T&eacute;cnico en Despacho de aeronaves DPA cursando un semestre adicional.</em></p>';
        $program->orden = 2;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "TEC. AERONÁUTICO";
        $program->meta_titulo = "Técnico Laboral por Competencias en Mantenimiento de Aeronaves, Aviones – TLA";
        $program->img = "images/web/inicio/sections/programas/2022/MECA-1080";
        $program->urlRedirect = Str::slug($program->titulo);
        $program->descripcion = "Se encargará del mantenimiento de la parte estructural, los sistemas mecánicos, sistemas hidráulicos de las aeronaves entre otros, su función se desarrollará bajo los lineamientos y estándares que establecen los fabricantes y posterior las compañías de aviación.";
        $program->content = '<p><em>El egresado del programa T&eacute;cnico en l&iacute;nea Avi&oacute;n (TLA) se encargar&aacute; del mantenimiento de la parte estructural, los sistemas mec&aacute;nicos, sistemas hidr&aacute;ulicos de las aeronaves entre otros, su funci&oacute;n se desarrollar&aacute; bajo los lineamientos y est&aacute;ndares que establecen los fabricantes y posterior las compa&ntilde;&iacute;as de aviaci&oacute;n.</em></p>

        <p><em>Dicha labor se podr&aacute; desarrollar en talleres de mantenimientos y aerol&iacute;neas a nivel nacional e internacional.</em></p>
        
        <p><em><span style="color:#f1c40f"><strong>Duraci&oacute;n:</strong></span>&nbsp;5 Niveles<br />
        <strong><span style="color:#f1c40f">Jornadas:</span>&nbsp;</strong>Ma&ntilde;ana, tarde y noche<br />
        <span style="color:#f1c40f"><strong>Pasant&iacute;as:</strong></span>12 meses</em></p>
        
        <p><em><span style="color:#f1c40f"><strong>Licencia:</strong></span>&nbsp;Se debe tramitar ante la Aeron&aacute;utica Civil Colombiana.</em></p>
        
        <h3><em><span style="color:#f1c40f"><strong>Triple titulaci&oacute;n</strong></span></em></h3>
        
        <p><em>Puede realizar la homologaci&oacute;n a&nbsp;<strong>T&eacute;cnico en&nbsp;L&iacute;nea de Helic&oacute;pteros TLH</strong>&nbsp;cursando un semestre adicional o&nbsp;<strong>T&eacute;cnico Especialista en Avi&oacute;nica TEEI</strong>&nbsp;en dos semestres adicionales.</em></p>';
        $program->orden = 3;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "TEC. EN TURISMO";
        $program->meta_titulo = "Técnico Laboral por Competencias en turismo y Agencia de Viajes – ATA";
        $program->img = "images/web/inicio/sections/programas/2022/TURISMO-HOMBRE-MUJER-2-1080";
        $program->urlRedirect = Str::slug($program->titulo);
        $program->descripcion = "El egresado del programa Técnico en Turismo y Agencia de Viajes se encarga de desarrollar actividades de diseño, planeación, operación y comercialización de paquetes turísticos en Agencias de Viajes y empresas del sector turístico.";
        $program->content = '<p><em>El Agente en Turismo y Agencias de Viaje, planea y organiza viajes a destinos nacionales e internacionales; asesora, elabora, comercializa y opera productos tur&iacute;sticos, basados en sus conocimientos adquiridos en geograf&iacute;a, destinos tur&iacute;sticos, costumbres regionales, documentaci&oacute;n, idiomas, entre otros; adicionalmente desarrolla habilidades en servicios hoteleros, operaci&oacute;n aeroportuaria, manejo de eventos y de los Sistemas Globales de Distribuci&oacute;n: Sabre y , orientando as&iacute; a los pasajeros de forma integral.</em></p>

        <p><em><strong><span style="color:#f1c40f">Jornadas:</span>&nbsp;Ma&ntilde;ana y Noche</strong></em></p>
        
        <p><em><strong><span style="color:#f1c40f">Duraci&oacute;n:</span>&nbsp;</strong>4 Niveles</em><br />
        &nbsp;</p>
        
        <h3><em><span style="color:#f1c40f"><strong>Certificaci&oacute;n Internacional</strong></span></em></h3>
        
        <p><em><strong>(incluye software GDS : Amadeus )</strong></em></p>
        
        <h3><em><span style="color:#f1c40f"><strong>Convenio para profesionalizaci&oacute;n</strong></span></em></h3>';
        $program->orden = 4;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "DESPACHO DE AERONAVES";
        $program->meta_titulo = " Despacho de Vuelo – DPA";
        $program->img = "images/web/inicio/sections/programas/2022/DESPACHO-1080";
        $program->urlRedirect = "despacho-de-aeronaves";
        $program->descripcion = "Coordina todas las variables para asegurar que la operación de vuelo sea conducida bajo los parámetros de seguridad y eficiencia, autorizado para ejercer el control operacional, la planificación y ayuda en vuelo, podrá determina si un vuelo se lleva a cabo en términos operacionales y técnicos.";
        $program->content = '<p><em>El Despachador de Vuelo coordina las variables operacionales y t&eacute;cnicas para asegurar que la operaci&oacute;n de vuelo sea conducida tan seguramente como sea posible. Es la persona autorizada para ejercer el control operacional, la planificaci&oacute;n de vuelo y la ayuda en vuelo.</em></p>

        <p><em><span style="color:#f1c40f"><strong>&iquest;Qu&eacute; hace un Despachador de Vuelo?</strong></span></em></p>
        
        <p><em>Determinan si un vuelo se debe llevarse a cabo en t&eacute;rminos Operacionales y T&eacute;cnicos; esto depende de un n&uacute;mero de factores: el viento, el tiempo tanto en el lugar de despegue como en el destino, la navegaci&oacute;n, el equipo, las instalaciones del aeropuerto, la condici&oacute;n t&eacute;cnica y el funcionamiento del avi&oacute;n, las necesidades de elevaci&oacute;n de combustible y mucho m&aacute;s.</em></p>
        
        <p><em><strong><span style="color:#f1c40f">Duraci&oacute;n:&nbsp;</span>&nbsp;</strong>3 Niveles<br />
        <span style="color:#f1c40f"><strong>Jornadas:&nbsp;</strong></span>Ma&ntilde;ana y Noche<br />
        <span style="color:#f1c40f"><strong>Pasant&iacute;as:</strong></span>&nbsp;No requiere</em></p>
        
        <h3><em><span style="color:#f1c40f"><strong>Doble titulaci&oacute;n</strong></span></em></h3>
        
        <p><em>Puede realizar Homologaci&oacute;n a<strong>&nbsp;Agente en log&iacute;stica Aeroportuaria ALA</strong>&nbsp;en un Semestre</em></p>';
        $program->orden = 5;
        $program->save();

        $program = new AdminPrograma();
        $program->titulo = "FORMACIÓN CONTINUADA";
        $program->img = "images/web/inicio/sections/programas/2022/Continuada";
        $program->urlRedirect = Str::slug($program->titulo);
        $program->descripcion = "Somos el centro  latinoamericano certificado para la formación aeronáutica, nuestras lineas de formación se basan en diplomados, especializaciones, adiciones, cursos, formación intermodal, entrenamiento trainer plus, seminarios y certificaciones bajo el reglamento aeronáutico";
        $program->orden = 6;
        $program->show_tab = false;
        $program->save();
    }
}
