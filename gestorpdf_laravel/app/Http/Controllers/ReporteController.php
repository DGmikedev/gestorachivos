<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Fpdf\Fpdf;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\HeaderUtils;

// comando de instalación :  composer require setasign/fpdf

class ReporteController extends Controller
{
    public function reporte(){


        $pdf = new Fpdf();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        
        // Move to 8 cm to the right
        // $pdf->Cell(80);

        // Texto centrado en una celda con cuadro 20*10 mm y salto de línea
        // $pdf->Cell(20, 10, 'TUTORILA LIBRERIA FPDF', 1, 1, 'C');

        // con el cero se ocupa todo el ancho del renglón
        $pdf->Cell(0, 10, 'TUTORILA LIBRERIA FPDF', 'B', 1, 'C');  // Titulo
        
        // Salto de línea
        $pdf->Ln(10);

        $pdf->SetFont('Arial','B', 8);


        $cell = "Cell(w, h, txt, border, ln, align, fill, link);        Imprime una celda (de area rectangular) con bordes opcionales";
        $pdf->Cell(30, 10, "FUNCION: Cell()", 0, 0, 'L');  // Titulo
        $pdf->Cell(0, 10, " ==> ".$cell , 0, 1, 'L');  
        $pdf->CEll(13, 20, "donde: ", 0, 0, 'L');

        $text = "w => Ancho de Celda. Si es 0, la celda se extiende hasta la margen derecha.\n";
        $text .= "h => Alto de celda. Valor por defecto: 0.\n"; 
        $text .= "txt => cadena a ser impresa. Valor por defecto: cadena vacia.\n";
        $text .= "border => Indica si los bordes deben se dibujados alrededor de la celda. El valor puede ser un numero:\n                  0: sin borde\n                  1: marco\n";
        $text .= "o una cadena que contenga una o una combinación de los siguientes caracteres (en cualquier orden):\nL: izquierda , T: superior , R: derecha , B: inferior\n";


        $pdf->MultiCell(0,4,$text);
        // $pdf->CEll(0, 20, "w => Ancho de Celda. Si es 0, la celda se extiende hasta la margen derecha.: ", 1, 1, 'L');

        /*
         $text = "donde: \n 
              
        \$pdf->Cell(0, 10, 'TUTORILA LIBRERIA FPDF', 'B', 1, 'C');\n
        "; 
        */
        
        // Imprimir texto en una columna de 6 cm de ancho
        // 

        /*
    


    

    Valor por defecto: 0. 
ln
    Indica donde la posición actula debería ir antes de invocar. Los valores posibles son:

        0: a la derecha
        1: al comienzo de la siguiente línea
        2: debajo

    Poner 1 es equivalente a poner 0 y llamar justo despues Ln(). Valor por defecto: 0. 
align
    Permite centrar o alinear el texto. Los posibles valores son:

        L o una cadena vacia: alineación izquierda (valor por defecto)
        C: centro
        R: alineación derecha

fill
    Indica si elfondo de la celda debe ser dibujada (true) o transparente (false). Valor por defecto: false. 
link
    URL o identificador retornado por AddLink(). 
        */

        



        

        $namepdf = "PAGINA_PDF";

        $fallback = str_replace('%', '', Str::ascii($namepdf));

        return new Response($pdf->Output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => HeaderUtils::makeDisposition('inline', $namepdf, $fallback),
        ]);


        

        // return view('template.pdf_reporte');
        
        // $data = "Hola mundo";
        // return $pdf->generaPDF($data);

    }
}
