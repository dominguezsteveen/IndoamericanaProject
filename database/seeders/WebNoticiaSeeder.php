<?php

namespace Database\Seeders;

use App\Models\Web\WebNoticia;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WebNoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = new WebNoticia();
        $news->titulo = "Ventajas de estudiar Auxiliar de Vuelo";
        $news->img = "images/web/noticias/ventajas-auxiliar-vuelo.webp";
        $news->content = "Ya sabes cual es tu sueño y es lo que quieres estudiar.

        Pero, ¿conoces las ventajas de ser Auxiliar de Vuelo? si no te las han contado, esta información es para ti. 
        
         
        
        Cumplimos con un currículum completo y estructurado de acuerdo al reglamento aeronáutico colombiano, con el cual, podrás prepararte como Auxiliar de vuelo en nuestra institución y obtendrás ventajas como:
        
        Trabajar en Aerolíneas Nacionales e Internacionales permitiéndote viajar, conocer Colombia y otros países.
        Tenemos convenios para pasantías con más de 12 aerolíneas nacionales e internacionales como Avianca, Latam, Lufthansa, Copa Airlines, Air Europa, Air Canada, Air France, Wingo, Viva Air, además de Policía Nacional y Fuerza Aérea.
        Tienes posibilidad de tener doble titulación, realizando un semestre adicional en Agente en Turismo y Agencia de Viajes, abriendo las opciones laborales en el sector turístico.
        Contamos con simuladores de tierra y cabina certificados por la Aeronáutica Civil con los implementos necesarios para la formación del programa Auxiliar de Servicio Abordo y Aeroportuario (ASA).
        Contamos con un Avión Douglas DC-9 para prácticas de servicios a bordo, evacuación en tierra y procedimientos de emergencia, que sirve como simulador para el entrenamiento del programa Auxiliar Servicios a Bordo…";

        $news->urlRedirect = Str::slug($news->titulo);
        $news->fecha_public = Carbon::parse('2021-05-31');
        $news->fecha_vigencia = now()->addMonth(2);
        $news->save();

        $news = new WebNoticia();
        $news->titulo = "Todo lo que necesitas saber sobre tu proceso de matrícula en 4 sencillos pasos";
        $news->img = "images/web/noticias/todo-sobre-proceso-matricula.webp";
        $news->content = "Es muy importante para nosotros brindarte las herramientas necesarias para que puedas agilizar el proceso de convertirte en nuevo miembro de la familia Indoamericana. Conoce cómo puedes legalizar tu matrícula a continuación:

        Dirígete a www.indoamericana.co e ingresa con el usuario y contraseña que llegó a tu correo electrónico. En caso de no contar con esta información, comunícate con el Departamento Comercial para recibir asesoría.
        2. Una vez el sistema te de acceso, debes cargar uno a uno los siguientes documentos:
        
        Fotografía 3×4
        Fotocopia del documento de identidad
        Fotocopia del diploma de bachiller o acta de grado
        Resultado del ICFES
        Recibo de derechos de admisión → recuerda que el pago puedes hacerlo a través de consignación en el Banco Popular o en línea a través de PayU con tarjeta débito o crédito.
        3. Lee y acepta los siguientes términos y condiciones que aparecen en el sistema: 
        
        Acuerdo de uso de firma electrónica
        Compromiso de responsabilidad estudiantil
        Consentimiento informado para la realización de asesoría y orientación académica y psicológica
        Aplicación de pruebas de alcohol y sustancias en general
        Autorización para el tratamiento de datos personales
        Eximente de responsabilidad
        4. Una vez el sistema ha identificado el pago, te habilitará un nuevo módulo con los siguientes documentos que deberás cargar:
        
        Contrato de matrícula: este documento lo puedes diligenciar y firmar a través del programa Adobe Acrobat Reader.
        Soporte de pago de matrícula
        Certificado médico de aptitud
        Certificado EPS o Sisbén
        ¡Y listo! así de fácil puedes realizar tu matrícula desde cualquier lugar.
        
        Mira cómo hacer el paso a paso en el siguiente tutorial → https://www.youtube.com/watch?v=2373ybpCAM8";

        $news->urlRedirect = "todo-sobre-tu-proceso-de-matricula";
        $news->fecha_public = Carbon::parse('2021-05-18');
        $news->fecha_vigencia = now()->addMonth(2);
        $news->save();
    }
}
