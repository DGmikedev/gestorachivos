<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\Mpdf;

use Dompdf\Dompdf;
use Dompdf\Options;


class FacturaController extends Controller
{
    public function gen_factura(){

        $pdf = new Mpdf('factura_t.pdf', ['A4', 'portrait'], 'template.pdf_factura', true,  [true, true, true, true, true, true] );

        return $pdf->generaPDF();


        /*
// Crear una nueva instancia de DOMPDF
$options = new Options();
$options->set("isHtml5ParserEnabled", true);
$options->set("isPhpEnabled", true); // Habilitar PHP en el HTML (esto es necesario si quieres ejecutar funciones PHP en el contenido)
$dompdf = new Dompdf($options);

// Definir los datos dinámicos que quieras usar en el encabezado y pie de página
$fecha = date('d/m/Y');
$usuario = "Juan Pérez";

// HTML de ejemplo con un cuerpo largo de contenido
$html = '<html><body>';

// Contenido principal de la página
$html .= '<h1>Reporte de Ventas</h1>';
$html .= '<p>Este es un reporte con encabezado y pie de página dinámicos.</p>';
$html .= '<p>Contenido adicional...</p>';
$html .= '<p>Contenido adicional...</p>';
$html .= '<p>Contenido adicional...</p>';
$html .= '<p>Contenido adicional...</p>';
$html .= '<p>Contenido adicional...</p>';

for($i=0; $i<500; $i++){
    $html .= '<p>Contenido adicional...</p>';
}


$html .= '</body></html>';

// Establecer la función para el encabezado y pie de página
$dompdf->set_option('isHtml5ParserEnabled', true);
$dompdf->set_option('isPhpEnabled', true);

$dompdf->loadHtml($html);

// Configurar el tamaño de la página (A4) y la orientación (portrait o landscape)
$dompdf->setPaper('A4', 'portrait');

// Definir la función de los encabezados y pies de página (callback)
$canvas = $dompdf->getCanvas();

// Callback para agregar el encabezado
$canvas->page_text(30, 20, "Reporte generado el: " . $fecha, null, 10, array(0,0,0)); // Encabezado con fecha

// Callback para agregar el pie de página
$canvas->page_text(30, 800, "Usuario: " . $usuario, null, 10, array(0,0,0)); // Pie de página con el nombre del usuario

// Renderiza el PDF
$dompdf->render();

// Enviar el PDF al navegador
$dompdf->stream('documento_con_encabezado_y_pie.pdf');


*/
    }

    
}

