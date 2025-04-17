<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Fpdf\Fpdf;
// 
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\HeaderUtils;

// comando de instalación :  composer require setasign/fpdf

class TutorialController extends Controller
{
    public function tutorial(){
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

        $text = "Este método permite imprimir texto con saltos de línea. Estos pueden ser automáticos (tan pronto como el texto alcanza el borde derecho de la celda) o explícito (via el carácter \\n)."; 
        $text .= "Tantas celdas como sean necesarias son creadas, uno debajo de otra. El texto puede ser alineado, centrado o justificado. El bloque de celda puede ser enmarcado y el fondo impreso.\n\n";
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
        $pdf->AliasNbPages();
        $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $pdf->SetFont('DejaVu','',8);

        // con el cero se ocupa todo el ancho del renglón
        $pdf->Cell(0, 10, 'TUTORIAL LIBRERIA FPDF', 'B', 1, 'C');  // Titulo

        $pdf->Ln(4);

        $pdf->SetFillColor(235, 245, 251 ); // RGB
        $cell = "SetAutoPageBreak(auto, margin);  Activa o desactiva el modo de salto de página automático.";
        $pdf->Cell(45, 10, "FUNCION: SetAutoPageBreak()", 'LTB', 0, 'L', true);  
        $pdf->Cell(0, 10, " ==> ".$cell , 'TBR', 1, 'L', true);  
        $pdf->SetFillColor(242, 244, 244); // RGB GRIS
        
        $text = "Cuando es habilitado, el segundo parámetro es la distancia de la parte inferior de la página que define al límite desencadenante. Por defecto, el modo esta activado y el márgen es 2cm.\n\n";
        $text .= "auto => Boleano indicando si el modo debería ser activado o desacticado.\n\n";
        $text .= "margin => Distancia desde la parte inferior de la página\n";
        $pdf->MultiCell(0,4,$text, 'LRB', 'L', true);

        $pdf->Ln(4);

        $pdf->SetFillColor(235, 245, 251 ); // RGB
        $cell = "SetMargins(left, top, right);  Define los márgenes izquierdo, superior, y derecho.";
        $pdf->Cell(35, 10, "FUNCION: SetMargins()", 'LTB', 0, 'L', true);  
        $pdf->Cell(0, 10, " ==> ".$cell , 'TBR', 1, 'L', true);  
        
        $pdf->SetFillColor(242, 244, 244); // RGB GRIS
        $text = "Por defecto, son iguales a 1 cm. Invoque este método para cambiarlas.\n\n";
        $text .= "left => Márgen izquierdo.\n";
        $text .= "top => Márgen superior.\n";
        $text .= "right => Márgen derecho. Valor por defecto es el mismo que el de la izquierda.\n";
        
        $pdf->MultiCell(0,4,$text, 'LRB', 'L', true);

        $pdf->Ln(4);

        $pdf->SetFillColor(235, 245, 251 ); // RGB
        $cell = "Image( file, x, y, w, h, type, link ); Imprime una imagen en la página.";
        $pdf->Cell(40, 10, "FUNCION:  \$pdf->Image()", 'LTB', 0, 'L', true);  
        $pdf->Cell(0, 10, " ==> ".$cell , 'TBR', 1, 'L', true);  
        
        $pdf->SetFillColor(242, 244, 244); // RGB GRIS
        $text =  "Las dimensiones pueden establecerse de diferentes maneras.\n";
        $text .= "mediante la especificación explícita de ancho y alto (en unidades definidas por el usuario o en ppp)\n";
        $text .= "mediante la indicación de una sola de las dimensiones: la otra se calculará automáticamente para mantener la proporción original\n";
        $text .= "sin indicar ninguna dimensión explícita. En este caso, la imagen se imprime a 96 puntos por pulgada\n\n";
        $text .= "Los formatos admitidos son JPEG, PNG y GIF. La extensión GD es necesaria para GIF.\n\n";
        $text .= "      Para el JPEG, se admiten todas sus versiones:\n";
        $text .= "          escala de grises\n";
        $text .= "          color verdadero (24 bits)\n";
        $text .= "          CMYK (32 bits)\n";
        $text .= "      Para el PNG se permiten:\n";
        $text .= "          escala de grises de 8 bits como máximo (256 niveles)\n";
        $text .= "          color indexado\n";
        $text .= "          color verdadero (24 bits)\n\n";
        $text .= "Para el GIF: en el caso de un GIF animado, sólo será mostrado el primer fotograma.\n";
        $text .= "Se admite transparencias.\n\n";
        $text .= "El formato puede ser especificado explícitamente o deducido a partir de la extensión del fichero.\n\n";
        $text .= "Es posible asociar un enlace a la imagen.\n\n";
        $text .= "!!! Nota: si una imagen se utiliza varias veces, sólo una copia será incrustada en el archivo !!!.\n\n";
        $text .="file => Nombre del archivo que contiene la imagen. \n";
        $text .="x => Abscisa de la esquina superior izquierda. Si no se especifica o es igual a null, se utilizará la abscisa actual. \n";
        $text .="y => Ordenada de la esquina superior izquierda. Si no se especifica o es igual a null, se utilizará la ordenada actual, además, un salto de página es invocado primero si es necesario (en caso de que esté habilitado el salto de página automático) y, después de la llamada, la ordenada actual se mueve a la parte inferior de la imagen. \n";
        $text .="w => Ancho de la imagen en la página. Existen tres posibilidades:\n";
        $text .="    Si el valor es positivo, éste será el ancho en la unidad de medida definida por el usuario.\n";
        $text .="    Si el valor es negativo, el valor absoluto será la resolución horizontal en ppp.\n";
        $text .="    Si no se especifica o es cero, se calcula automáticamente\n";
        $text .= "h => Alto de la imagen en la página. Existen tres posibilidades:\n";
        $text .= "        Si el valor es positivo, éste será la altura en la unidad de medida definida por el usuario.\n";
        $text .= "        Si el valor es negativo, el valor absoluto será la resolución vertical en ppp.\n";
        $text .= "        Si no se especifica o es cero, se calcula automáticamente\n";
        $text .= "type => Formato de la imagen. Los posibles valores son (indiferente a mayúsculas): JPG, JPEG, PNG y GIF. Si no se especifica, el tipo se deduce de la extensión del fichero.\n";
        $text .= "link => URL o identificador devuelto por el método AddLink().\n";
        
        $pdf->MultiCell(0,4,$text, 'LRB', 'L', true);

        $pdf->Ln(15);

        // $pdf->SetY(-16); // Posición: a 1,5 cm del final
        $pdf->SetFont('Arial','I',8); // Arial italic 8
        $pdf->Cell(0,5,'Pagina '.$pdf->PageNo().' de {nb}','T','L','R'); // Imprime el número de página

        $pdf->AddPage();
        $pdf->AliasNbPages();
        $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $pdf->SetFont('DejaVu','',8);
        
        // con el cero se ocupa todo el ancho del renglón
        $pdf->Cell(0, 10, 'TUTORIAL LIBRERIA FPDF', 'B', 1, 'C');  // Titulo

        $pdf->Ln(4);

        $pdf->SetFillColor(235, 245, 251 ); // RGB
        $cell = "Text(float x, float y, string txt); Imprime una cadena de carácteres. ";
        $pdf->Cell(40, 10, "FUNCION:  \$pdf->Text()", 'LTB', 0, 'L', true);  
        $pdf->Cell(0, 10, " ==> ".$cell , 'TBR', 1, 'L', true);  
        
        $pdf->SetFillColor(242, 244, 244); // RGB GRIS
        $text =  "El origen es a la izquierda del primer carácter, sobre la línea base. Este método permite colocar una cadena precisamente en la página,\n";
        $text .= "pero es usualmente más fácil usar Cell(), MultiCell() o Write() los cuales son los métodos estándades para imprimir texto.\n";
        $text .= "\ndonde:\n";
        $text .= "x => Abscisa del origen.\n"; 
        $text .= "y => Ordenada del origen.\n"; 
        $text .= "txt => Cadena a ser impresa.\n";

        $pdf->MultiCell(0,4,$text, 'LRB', 'L', true);
        
        $pdf->Ln(4);

        $pdf->SetFillColor(235, 245, 251 ); // RGB
        $cell = "Write(h, txt, link ; Este método imprime el texto desde la posición actual";
        $pdf->Cell(40, 10, "FUNCION:  \$pdf->Write()", 'LTB', 0, 'L', true);  
        $pdf->Cell(0, 10, " ==> ".$cell , 'TBR', 1, 'L', true);  
        
        $pdf->SetFillColor(242, 244, 244); // RGB GRIS
        $text  = "Cuando el márgen derecho es alcanzado (o el carácter \\n es alcanzado) se produce un salto de línea y el texto continua desde el márgen izquierdo.\n"; 
        $text .= "Una ves el método termine, la posición actual es dejada justo al final del texto. Es posible poner una referencia sobre el texto.\n";
        $text .= "h => Alto de línea.\n";
        $text .= "txt => Cadena a ser impresa.\n";
        $text .= "link => URL o identificador regresado por AddLink().\n";
        

        $pdf->MultiCell(0,4,$text, 'LRB', 'L', true);
      
        $namepdf = "PAGINA_PDF";

        $fallback = str_replace('%', '', Str::ascii($namepdf));

        return new Response($pdf->Output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => HeaderUtils::makeDisposition('inline', $namepdf, $fallback),
        ]);

    }
}
