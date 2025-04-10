<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\Mpdf;

class ReporteController extends Controller
{
    public function reporte(){

        $pdf = new Mpdf('credencial.pdf', ['official','landscape'], 'template.pdf_reporte', true,  [true, true, true, true, true, true] );

        $data = "Hola mundo";
        return $pdf->generaPDF($data);

    }
}
