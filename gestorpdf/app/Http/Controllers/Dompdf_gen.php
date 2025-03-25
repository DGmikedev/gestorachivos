<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class Dompdf_gen extends Controller
{

    public function genera_dompdf(){

    // 1. Configurar opciones para Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);  // Habilitar análisis HTML5
    $options->set('isPhpEnabled', true);          // Habilitar PHP dentro de HTML (si es necesario)
    // define('DOMPDF_ENABLE_PHP', true);

     // 2. Inicializar Dompdf
     $dompdf = new Dompdf($options);

     // 3. Cargar el contenido HTML
     $data = [
         'name' => 'Roky N',
         'email' => 'rocky.n@example.com',
        'long' => 200
     ];

     $html = view('template.pdf_simple', $data)->render();

     // 4. Cargar el HTML a Dompdf
     $dompdf->loadHtml($html);

    // 5. (Opcional) Configurar el tamaño del papel y orientación
        
    // horizontal en A4 => $dompdf->setPaper('A4', 'landscape');
    // vertical   en A4 => $dompdf->setPaper('A4', 'portrait');
    // en A5 y en vertical => $dompdf->setPaper('A5', 'portrait');

    // Tamaño    Nombre        Comando para Generar PDF
    // de Papel  en Dompdf
    //---------------------------------------------------------
    // A4        A4            $dompdf->setPaper('A4');
    // Carta     letter	       $dompdf->setPaper('letter');
    // Legal     legal         $dompdf->setPaper('legal');
    // A3        A3            $dompdf->setPaper('A3');
    // A5	     A5            $dompdf->setPaper('A5');
    // B5	     B5            $dompdf->setPaper('B5');
    // Tabloid	 tabloid       $dompdf->setPaper('tabloid');
    // Executive executive     $dompdf->setPaper('executive');
    // A6	     A6            $dompdf->setPaper('A6');
    // A7	     A7            $dompdf->setPaper('A7');
    // A8	     A8            $dompdf->setPaper('A8');
    // A9	     A9            $dompdf->setPaper('A9');
    // B4	     B4            $dompdf->setPaper('B4');
    // B6	     B6            $dompdf->setPaper('B6');
    // C4	     C4            $dompdf->setPaper('C4');
    // C5	     C5            $dompdf->setPaper('C5');
    // C6	     C6            $dompdf->setPaper('C6');
    // Folio	 folio         $dompdf->setPaper('folio');
    // Custom    (medidas)     $dompdf->setPaper([ancho, alto]);
    
    $dompdf->setPaper('A4', 'landscape');
    // $dompdf->setPaper(array(0,0,792.00, 1224.00), 'portrait');
    // array(0, 0, 595, 841), 'portrait'
    // 6. Renderizar el PDF
    $dompdf->render();


     // Obtener el canvas para agregar los números de página
    //  $canvas = $dompdf->getCanvas();
    //  $canvas->pageText(270, 770, "Página {PAGE_NUM} de {PAGE_COUNT}", null, 12, array(0,0,0));  // Coordenadas y estilo


    // 7. Descargar el PDF
    return $dompdf->stream('dompdf_basic.pdf', array("Attachment" => 1));


        /*
        // reference the Dompdf namespace
        // use Dompdf\Dompdf;

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        // $dompdf->loadHtml('hello world niño ');
        // $html = '<h1>Hola mundo!  niño  ábecedario</h1>';
        $html = file_get_contents(view('template.pdf_simple'));

        

//     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>



        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Cargamos el contenido HTML.
        // $dompdf->load_html(utf8_decode($html));
        $dompdf->file_get_contents('');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
        
*/


    }
    
}

/*



    <?php
    use Dompdf\Dompdf;
     
    $dompdf = new Dompdf(); //crear el objeto de la clase Dompdf
           
    // Componer el HTML
    $html = '<h1>Hola</h1>'; //el html que necesites en formato texto, puedes incluirlo desde una vista de tu MVC
            
    // Añadir el HTML a dompdf
    $dompdf->loadHtml($html);
            
    //Establecer el tamaño de hoja en DOMPDF
    $dompdf->setPaper('A4', 'portrait');
     
    // Renderizar el PDF
    $dompdf->render();
     
    // Forzar descarga del PDF
    $dompdf->stream("mypdf.pdf", [ "Attachment" => true]);
    ?>


    "4a0" => array(0,0,4767.87,6740.79),
    "2a0" => array(0,0,3370.39,4767.87),
    "a0" => array(0,0,2383.94,3370.39),
    "a1" => array(0,0,1683.78,2383.94),
    "a2" => array(0,0,1190.55,1683.78),
    "a3" => array(0,0,841.89,1190.55),
    "a4" => array(0,0,595.28,841.89),
    "a5" => array(0,0,419.53,595.28),
    "a6" => array(0,0,297.64,419.53),
    "a7" => array(0,0,209.76,297.64),
    "a8" => array(0,0,147.40,209.76),
    "a9" => array(0,0,104.88,147.40),
    "a10" => array(0,0,73.70,104.88),
    "b0" => array(0,0,2834.65,4008.19),
    "b1" => array(0,0,2004.09,2834.65),
    "b2" => array(0,0,1417.32,2004.09),
    "b3" => array(0,0,1000.63,1417.32),
    "b4" => array(0,0,708.66,1000.63),
    "b5" => array(0,0,498.90,708.66),
    "b6" => array(0,0,354.33,498.90),
    "b7" => array(0,0,249.45,354.33),
    "b8" => array(0,0,175.75,249.45),
    "b9" => array(0,0,124.72,175.75),
    "b10" => array(0,0,87.87,124.72),
    "c0" => array(0,0,2599.37,3676.54),
    "c1" => array(0,0,1836.85,2599.37),
    "c2" => array(0,0,1298.27,1836.85),
    "c3" => array(0,0,918.43,1298.27),
    "c4" => array(0,0,649.13,918.43),
    "c5" => array(0,0,459.21,649.13),
    "c6" => array(0,0,323.15,459.21),
    "c7" => array(0,0,229.61,323.15),
    "c8" => array(0,0,161.57,229.61),
    "c9" => array(0,0,113.39,161.57),
    "c10" => array(0,0,79.37,113.39),
    "ra0" => array(0,0,2437.80,3458.27),
    "ra1" => array(0,0,1729.13,2437.80),
    "ra2" => array(0,0,1218.90,1729.13),
    "ra3" => array(0,0,864.57,1218.90),
    "ra4" => array(0,0,609.45,864.57),
    "sra0" => array(0,0,2551.18,3628.35),
    "sra1" => array(0,0,1814.17,2551.18),
    "sra2" => array(0,0,1275.59,1814.17),
    "sra3" => array(0,0,907.09,1275.59),
    "sra4" => array(0,0,637.80,907.09),
    "letter" => array(0,0,612.00,792.00),
    "legal" => array(0,0,612.00,1008.00),
    "ledger" => array(0,0,1224.00, 792.00),
    "tabloid" => array(0,0,792.00, 1224.00),
    "executive" => array(0,0,521.86,756.00),
    "folio" => array(0,0,612.00,936.00),
    "commercial #10 envelope" => array(0,0,684,297),
    "catalog #10 1/2 envelope" => array(0,0,648,864),
    "8.5x11" => array(0,0,612.00,792.00),
    "8.5x14" => array(0,0,612.00,1008.0),
    "11x17"  => array(0,0,792.00, 1224.00)

    

    <?php
    
     
    //tamaño custom, se especifica en puntos, lo que en CSS se escribe como pt
    $dompdf->set_paper(array(0, 0, 595, 841), 'portrait');
    ?>

$dompdf = new Dompdf();
       
// Componer el HTML
$html = '<h1>Prueba SRCodigoFuente</h1>';
        
// Añadir el HTML a dompdf
$dompdf->loadHtml($html);
        
//Establecer el tamaño de hoja en DOMPDF
$dompdf->setPaper( [0, 0, 141.732,  283,465); //x inicio, y inicio, ancho final, alto final
 
// Renderizar el PDF
$dompdf->render();
 
$dompdf->stream("mypdf.pdf");



    html {
    	margin: 50pt 15pt;
    }

    use Dompdf\Dompdf;
 
$dompdf = new Dompdf();
$dompdf->set_option('defaultFont', 'Courier');


session_start(); 
// Iniciamos el buffer
ob_start();
  // Operaciones para generar el HTML que pueden ser llamadas a Bases de Datos, while, etc...
  require_once ('plantilla.html');
  (...)
  // Volcamos el contenido del buffer
  $html = ob_get_clean();
 
  // Creamos la variable de sesión
  $_SESSION['pdf']['content'] = $html;
  $_SESSION['pdf']['filename'] = 'Informe.pdf';
  $printpdf = true;

  session_start();
// DOMPDF según el tipo de documento a imprimir o la cantidad puede ser muy exigente así que aumentamos la memoria disponible
ini_set("memory_limit", "128M");
 
// Cargamos DOMPDF
require_once 'dompdf/dompdf_config.inc.php';
 
// Recuperamos la información de la sesión
$html = $_SESSION['pdf']['content'];
$filename = $_SESSION['pdf']['filename'];
 
// Volcamos las páginas en papel
$dompdf = new DOMPDF();
$dompdf->set_paper('A4', 'landscape');
 
// Se carga el codigo html
$dompdf->load_html($html);
// Lanzamos a render
$dompdf->render();
// Guardamos a PDF
$dompdf->stream($filename);
 
// Borramos la variable de sesión
unset($_SESSION['pdf']);





// CONFIGUARACION
// Please refer to dompdf_config.inc.php for details on each configuration option.

//define("DOMPDF_TEMP_DIR", "/tmp");
//define("DOMPDF_FONT_DIR", DOMPDF_DIR."/lib/fonts/");
//define("DOMPDF_FONT_CACHE", DOMPDF_DIR."/lib/fonts/");
//define("DOMPDF_UNICODE_ENABLED", true);
//define("DOMPDF_PDF_BACKEND", "PDFLib");
//define("DOMPDF_DEFAULT_MEDIA_TYPE", "print");
//define("DOMPDF_DEFAULT_PAPER_SIZE", "letter");
//define("DOMPDF_DEFAULT_FONT", "serif");
//define("DOMPDF_DPI", 72);
//define("DOMPDF_ENABLE_CSS_FLOAT", true);
//define("DOMPDF_ENABLE_JAVASCRIPT", false);
//define("DEBUGPNG", true);
//define("DEBUGKEEPTEMP", true);
//define("DEBUGCSS", true);
//define("DEBUG_LAYOUT", true);
//define("DEBUG_LAYOUT_LINES", false);
//define("DEBUG_LAYOUT_BLOCKS", false);
//define("DEBUG_LAYOUT_INLINE", false);
//define("DOMPDF_FONT_HEIGHT_RATIO", 1.0);
//define("DEBUG_LAYOUT_PADDINGBOX", false);
//define("DOMPDF_LOG_OUTPUT_FILE", DOMPDF_FONT_DIR."log.htm");
//define("DOMPDF_ENABLE_HTML5PARSER", true);
//define("DOMPDF_ENABLE_FONTSUBSETTING", true);

// Authentication for the dompdf/www
//define("DOMPDF_ADMIN_USERNAME", "user");
//define("DOMPDF_ADMIN_PASSWORD", "password");

/**
 * Attention!
 * The following settings may increase the risk of system exploit.
 * Do not change these settings without understanding the consequences.
 * Additional documentation is available on the dompdf wiki at:
 * https://github.com/dompdf/dompdf/wiki
 */
//define("DOMPDF_CHROOT", DOMPDF_DIR);
//define("DOMPDF_ENABLE_PHP", false);
//define("DOMPDF_ENABLE_REMOTE", false)




