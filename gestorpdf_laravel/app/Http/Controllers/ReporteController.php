<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use setasign\fpdf\fpdf;
// use App\Clases\Mpdf;

// comando de instalación :  composer require setasign/fpdf

class ReporteController extends Controller
{
    public function reporte(){

        // $pdf = new Mpdf('credencial.pdf', ['official','landscape'], 'template.pdf_reporte', true,  [true, true, true, true, true, true] );

        $pdf = new fpdf();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'¡Hola, Mundo!');
        $pdf->Output();

        // return view('template.pdf_reporte');
        
        // $data = "Hola mundo";
        // return $pdf->generaPDF($data);

    }
}
