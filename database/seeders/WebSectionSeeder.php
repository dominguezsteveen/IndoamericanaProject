<?php

namespace Database\Seeders;

use App\Models\Web\WebSection;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $section = new WebSection();
        $section->titulo = "ATENCIÓN COMUNIDAD";
        $section->img = "images/web/inicio/sections/incribete.webp";
        $section->urlRedirect = "formulario-online";
        $section->content = '<p><em><strong>Bogot&aacute; D.C, 05 de mayo de 2022</strong></em></p>

        <p><em>La Corporaci&oacute;n Educativa Indoamericana, informa a la ciudadan&iacute;a en general, y a los estudiantes y egresados de nuestra Instituci&oacute;n, en particular, que no se est&aacute;n expidiendo certificados sobre capacitaciones de cursos b&aacute;sicos no tomados de forma real por los estudiantes y/o egresados de nuestra Instituci&oacute;n y tampoco cobra por ello.</em></p>
        
        <p><em>Personas inescrupulosas y ajenas a la instituci&oacute;n est&aacute;n contactando a estudiantes y egresados de la Instituci&oacute;n con el fin de ofrecer vacantes laborales en el sector aeron&aacute;utico en donde se est&aacute; solicitando como requisito la certificaci&oacute;n de los siguientes cursos: 1) Prevenci&oacute;n de riesgos, 2) Accidentes laborales aeroportuarios, 3) Trato integral.</em></p>
        
        <p><em>Los delincuentes est&aacute;n informando a los estudiantes y egresados que se deben contactar con un supuesto funcionario de nuestra Instituci&oacute;n quien certifica dichos cursos sobre un cobro y pago por cada uno de ellos, se advierte que estamos frente a un posible caso de estafa y suplantaci&oacute;n empresarial por terceras personas quienes se hacen pasar en nombre de la Corporaci&oacute;n Educativa Indoamericana.</em></p>
        
        <p><em>Es importante que la comunidad educativa verifique cualquier informaci&oacute;n que reciba a estos canales oficiales de la entidad:</em></p>
        
        <ul style="list-style: inside">
            <li><em><span style="color:#999999">P&aacute;gina oficial de la instituci&oacute;n:&nbsp;</span><a href="https://indoamericana.edu.co/">https://indoamericana.edu.co/</a></em></li>
            <li><em><span style="color:#999999">Atenci&oacute;n telef&oacute;nica 6014324350 extensi&oacute;n 1002 &ndash; 1033</span></em></li>
            <li><em><span style="color:#999999">Servicio de Whatsapp: n&uacute;mero 3013904156 (solo mensajer&iacute;a)</span></em></li>
            <li><em><span style="color:#999999">Servicio de correo electr&oacute;nico:&nbsp;</span><a href="mailto:pae@indoamericana.edu.co"><span style="color:#3498db">pae@indoamericana.edu.co</span></a></em></li>
            <li><em><span style="color:#999999">Horario de atenci&oacute;n: lunes a viernes de 7 am a 6 pm y s&aacute;bados de 8 am a 1 pm</span></em></li>
        </ul>
        
        <p><em>Importante, no env&iacute;e informaci&oacute;n personal a correos electr&oacute;nicos no institucionales y bajo ning&uacute;n motivo realice pagos a terceros que no se identifique como personal certificado por la Instituci&oacute;n a trav&eacute;s de los canales oficiales de atenci&oacute;n referenciados, la Corporaci&oacute;n Educativa Indoamericana agradecen reportar sobre casos sospechosos ante las autoridades competentes y alertar de forma inmediata a la Corporaci&oacute;n a trav&eacute;s del Rector y docentes sobre esta modalidad de suplantaci&oacute;n y potencial &ldquo;hurto&rdquo; y &ldquo;estafa&rdquo;.</em></p>
        
        <h4 style="text-align:center"><span style="color:#172e42"><em><strong>&iexcl;ACTUAR R&Aacute;PIDAMENTE PUEDE AYUDAR A EVITAR EL DELITO!</strong></em></span></h4>';

        $section->fecha_public = Carbon::parse('2022-05-05');
        $section->fecha_vigencia = Carbon::parse('2022-12-31');
        $section->save();

        $section = new WebSection();
        $section->titulo = "¿POR QUÉ ESTUDIAR AVIACIÓN
EN LA CORPORACIÓN EDUCATIVA INDOAMERICANA?";
        $section->img = "images/web/inicio/sections/logo.webp";
        $section->urlRedirect = "formulario-online";
        $section->content = '<p><em>Escuela aeron&aacute;utica No. 1 con m&aacute;s de 35 a&ntilde;os de experiencia formando l&iacute;deres aeron&aacute;uticos, contamos con la mayor cantidad de programas acad&eacute;micos enfocados en la capacitaci&oacute;n de los profesionales de la aviaci&oacute;n, mediante el enfoque de formaci&oacute;n integral paralela a la instrucci&oacute;n, que les permita desempe&ntilde;arse laboralmente de forma id&oacute;nea, eficaz y eficiente a nivel Nacional e Internacional. Estamos ubicados en la ciudad de Bogot&aacute;, somos la &uacute;nica escuela de Colombia catalogada como Centro de Excelencia por la Organizaci&oacute;n de Aviaci&oacute;n Civil Internacional (OACI), en el programa&nbsp;<strong>TRAINAIR PLUS.</strong></em></p>
        ';

        $section->fecha_public = now();
        $section->fecha_vigencia = Carbon::parse('2022-12-31');
        $section->save();
    }
}
