<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class FacturaController extends Controller
{
    public function gen_factura(){

        $options = new Options();
        $options->set('isPhpEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true); // Para habilitar la ejecucion de funciones para enlaces remotas
        // $options->set('isJavascriptEnabled', true); // Para habilitar la ejecucion de funciones javascript
        // $options->set('isFontSubsettingEnabled', true); // Para habilitar la subconjunto de fuentes
        // $options->set('isCssFloatEnabled', true); // Para habilitar la interpretacion de css float

        $pdf = new Dompdf($options);

        $data = [
            '_fullname'=> 'JOSÉ JESÚS MONCAYO GUTIERREZ',
            '_descservicio' => 'IE DIGITAL MODULO DE DIPLOMADO EN LÍNEA',
            '_refbancaria' => '84436055228634288157',
            '_vigenciareferencia' => '14/03/2025',
            '_folioseguimiento' => '5739Z6612',
            '_curp' => 'FGCD67UIU7HDFMTG09',
            '_emisionreferecnia' => '13/03/2025',
            '_movs' => '1',
            '_rfc' => 'REMJ670313HDFRZS09',
        ];


        $nombre_pdf = 'FACTURA_'.$data['_curp'].'_'. date('Ymd') . '.pdf';

        $html = view('template.pdf_factura', compact("data"))->render();

        $pdf->loadHtml( $html );

        $pdf->setPaper('A4', 'portrait'); // ajusta el tamaño de papel

        $pdf->render(); // 6. Renderizar el PDF

        $pdf->stream($nombre_pdf, array("Attachment" => 1)); // 7. Descargar el
       
       // return view('template.pdf_factura');

    }
}
