<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Fpdf\Fpdf;
// 
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\HeaderUtils;

// comando de instalación :  composer require setasign/fpdf

class ReporteController extends Controller
{
    public function reporte(){
        require_once base_path('packages/utftfpdf/tfpdf/tfpdf.php');

        $pdf = new \tFPDF(); // $pdf = new Fpdf();
        $pdf->SetAutoPageBreak(true, 1);
        $pdf->AddPage();
        $pdf->AliasNbPages();

        $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $pdf->SetFont('DejaVu','',8);
        
        // Move to 8 cm to the right
        // $pdf->Cell(80);

        // Texto centrado en una celda con cuadro 20*10 mm y salto de línea
        // $pdf->Cell(20, 10, 'TUTORILA LIBRERIA FPDF', 1, 1, 'C');

        // con el cero se ocupa todo el ancho del renglón
        $pdf->Cell(0, 10, 'TUTORIAL LIBRERIA FPDF', 'B', 1, 'C');  // Titulo
        
        // Salto de línea
        $pdf->Ln(4);

        
        // Se ajusta el color de fondo para le celda
        $pdf->SetFillColor(235, 245, 251 ); // RGB

        $cell = "Cell(w, h, txt, border, ln, align, fill, link);   Imprime una celda (de área rectangular) con bordes opcionales";
        $pdf->Cell(30, 10, "FUNCION: Cell()", 'LTB', 0, 'L', true); 
        $pdf->Cell(0, 10, " ==> ".$cell , 'TBR', 1, 'L', true);  
        
       //  $pdf->SetFillColor(242, 244, 244); // RGB
       //  $pdf->Cell(13, 76, "donde: ", 'LB', 0, 2, true);

       $pdf->SetFillColor(242, 244, 244); // RGB GRIS
        $text  = "w => Ancho de Celda. Si es 0, la celda se extiende hasta la margen derecha.\n";
        $text .= "h => Alto de celda. Valor por defecto: 0.\n"; 
        $text .= "txt => cadena a ser impresa. Valor por defecto: cadena vacia.\n";
        $text .= "border => Indica si los bordes deben se dibujados alrededor de la celda. El valor puede ser un número:\n                  0: sin borde\n                  1: marco\n";
        $text .= "                  o una cadena que contenga una o una combinación de los siguientes caracteres (en cualquier orden):\n                            L: izquierda , T: superior , R: derecha , B: inferior\n";
        $text .= "ln => Indica donde la posición actual debería ir antes de invocar. Los valores posibles son:\n";
        $text .= "                  0: a la derecha\n";
        $text .= "                  1: al comienzo de la siguiente línea\n";
        $text .= "                  2: debajo\n";
        $text .= "                  Poner 1 es equivalente a poner 0 y llamar justo despues Ln(). Valor por defecto: 0.\n";
        $text .= "align  => Permite centrar o alinear el texto. Los posibles valores son:\n";
        $text .= "                  L o una cadena vacia: alineación izquierda (valor por defecto)\n";
        $text .= "                  C: centro\n";
        $text .= "                  R: alineación derecha\n";
        $text .= "fill => Indica si elfondo de la celda debe ser dibujada (true) o transparente (false). Valor por defecto: false.\n";
        $text .= "link => URL o identificador retornado por AddLink()."; 

        $pdf->MultiCell(0,4,$text, 'LRB', 'L', true);

        $pdf->Ln(4);

         // Se ajusta el color de fondo para le celda
        $pdf->SetFillColor(235, 245, 251 ); // RGB

        $cell = "Ln(h);   Ejecuta un salto de línea del alto del parametro que se le pasa en el párametro h";
        $pdf->Cell(30, 10, "FUNCION: Ln(h)", 'LTB', 0, 'L', true);  
        $pdf->Cell(0, 10, " ==> ".$cell , 'TBR', 1, 'L', true);  
        $pdf->SetFillColor(242, 244, 244); // RGB GRIS
        $pdf->Cell(0, 10, "La altura del salto, Por defecto, el valor es igual a la altura de la última celda impresa", 'LBR', 1, 1, true);

        $pdf->Ln(4);

        $pdf->SetFillColor(235, 245, 251 ); // RGB AZUL

        $cell = "Este método permite imprimir texto con saltos de línea";
        $pdf->Cell(30, 10, "FUNCIÓN: MultiCell()", 'LTB', 0, 'L', true);
        $pdf->Cell(0, 10, " ==> MultiCell(w, h, txt, border, align, fill)      $cell", 'RTB', 1, 'L', true);

        $pdf->SetFillColor(242, 244, 244); // RGB GRIS

        $text = "Este método permite imprimir texto con saltos de línea. Estos pueden ser automáticos (tan pronto como el texto alcanza el borde derecho de la celda) o explícito (via el carácter \\n). Tantas celdas como sean necesarias son creadas, uno debajo de otra.
El texto puede ser alineado, centrado o justificado. El bloque de celda puede ser enmarcado y el fondo impreso.\n\n";
        $text .= "w => Ancho de Celda. Si es 0, la celda se extiende hasta la margen derecha.\n";
        $text .= "h => Alto de celda. Valor por defecto: 0.\n"; 
        $text .= "txt => cadena a ser impresa. Valor por defecto: cadena vacia.\n";
        $text .= "border => Indica si los bordes deben se dibujados alrededor de la celda. El valor puede ser un número:\n                  0: sin borde\n                  1: marco\n";
        $text .= "                  o una cadena que contenga una o una combinación de los siguientes caracteres (en cualquier orden):\n                            L: izquierda , T: superior , R: derecha , B: inferior\n";
        $text .= "align  => Permite centrar o alinear el texto. Los posibles valores son:\n";
        $text .= "                  L o una cadena vacia: alineación izquierda (valor por defecto)\n";
        $text .= "                  C: centro\n";
        $text .= "                  R: alineación derecha\n";
        $text .= "fill => Indica si elfondo de la celda debe ser dibujada (true) o transparente (false). Valor por defecto: false.\n";

        $pdf->MultiCell(0,4,$text, 'LRB', 'L', true);

        $pdf->Ln(4);

        // Se ajusta el color de fondo para le celda
        $pdf->SetFillColor(235, 245, 251 ); // RGB
        $cell = "\$pdf->PageNo(); o \$this->PageNo();   Obtiene el número de página";
        $pdf->Cell(30, 10, "FUNCION: PageNo()", 'LTB', 0, 'L', true);
        $pdf->Cell(0, 10, " ==> ".$cell , 'TBR', 1, 'L', true);  

        $pdf->SetFillColor(242, 244, 244); // RGB GRIS
        $text = "\n";
        $text .= "En la configuración incial se debe invocar el contador de páginas:\n";
        $text .= "\$pdf->AliasNbPages();  // Este valor será poscicionado en donde se ubique el texto { nb }\n\n";
        $text .= "Despues se deberá de configurar, ya sea en el footer o donde sea requerido, se recomienda esta configuración:\n\n";
        $text .= "\$pdf->SetY(-16);                                                                        // Posición: a 1,5 cm del final\n";
        $text .= "\$pdf->SetFont('Arial','I',8);                                                         // Arial italic 8\n";
        $text .= "\$pdf->Cell(0,5,'Pagina '.\$pdf->PageNo().' de { nb }',0,'L','R');  // Imprime el número de página,\nNOTA: QUITAR LOS ESPACIOS ENTR LOS CORCHETES {  } y las letras nb para que imprima el número de páginas\n";

        $pdf->MultiCell(0,4,$text, 'LRB', 1, 'L', true);

        $pdf->Ln(15);

        // $pdf->SetY(-16); // Posición: a 1,5 cm del final
        $pdf->SetFont('Arial','I',8); // Arial italic 8
        $pdf->Cell(0,5,'Pagina '.$pdf->PageNo().' de {nb}','T','L','R'); // Imprime el número de página
        

        $pdf->AddPage();


        /*
        SetMargins
        SetMargins(float left, float top [, float right])
        Descripción
        Define los márgenes izquierdo, superior, y derecho. Por defecto, son iguales a 1 cm. Invoque este método para cambiarlas.
        Parámetros

        left
            Márgen izquierdo. 
        top
            Márgen superior. 
        right
            Márgen derecho. Valor por defecto es el mismo que el de la izquierda. 



SetAutoPageBreak
SetAutoPageBreak(boolean auto [, float margin])
Descripción
Activa o desactiva el modo de salto de página automático. Cuando es habilitado, el segundo parámetro es la distancia de la parte inferior de la página que define al límite desencadenante. Por defecto, el modo esta activado y el márgen es 2cm.
Parámetros

auto
    Boleano indicando si el modo debería ser activado o desacticado. 
margin
    Distancia desde la parte inferior de la página 



        */

       
        
        
        
        
        



        /*
        MultiCell
MultiCell(float w, float h, string txt [, mixed border [, string align [, boolean fill]]])
Descripción
Este método permite imprimir texto con saltos de línea. Estos pueden ser automáticos (tan pronto como el texto alcanza el borde derecho de la celda) o explícito (via el carácter \n). Tantas celdas como sean necesarias son creadas, uno debajo de otra.
El texto puede ser alineado, centrado o justificado. El bloque de celda puede ser enmarcado y el fondo impreso.
Parámetros

w
    Ancho de celdas. Si 0, estos se extienden hasta l márgen derecha de la página. 
h
    Alto de las celdas. 
txt
    Cadena para imprimir. 
border
    Indica si los bordes deben ser dibujados al rededor del bloque la celda. El valor puede ser un número:

        0: no borde
        1: marco

    o una cadena conteniendo algún o todos los siguientes carácteres (en cualquier orden):

        L: izquierda
        T: superior
        R: derecha
        B: inferior

    Valor por defecto: 0. 
align
    Establece la alineación de texto. Los posibles valores son:

        L: alineación a la izquierda
        C: centrado
        R: alineación a la derecha
        J: justificación (valor por defecto)

fill
    Indica si el fondo de la celda debe ser dibujado (true) o transparente (false). Valor por defecto: false. 
        */

        $namepdf = "PAGINA_PDF";

        $fallback = str_replace('%', '', Str::ascii($namepdf));

        return new Response($pdf->Output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => HeaderUtils::makeDisposition('inline', $namepdf, $fallback),
        ]);

    }
}
