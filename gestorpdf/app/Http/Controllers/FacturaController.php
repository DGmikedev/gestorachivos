<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\Mpdf;

class FacturaController extends Controller
{
    public function gen_factura(){

        $pdf = new Mpdf('factura_t.pdf', ['A4', 'portrait'], 'template.pdf_factura', true,  [true, true, true, true, true, true] );

        return $pdf->generaPDF();

    }
}

