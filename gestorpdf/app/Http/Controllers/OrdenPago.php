<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class OrdenPago extends Controller
{
    public function genera_orden(){

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

        $instituciones = [
            [ "BAJIO"           , "17-IMPTOS PUE"   , "NO PARTICIPA" , "$ 4.00 + IVA",  "NO PARTICIPA",  "$ 4.00 + IVA",  "$ 4.00 + IVA"],
            [ "BANCO AZTECA"    , "PUEBLA"          , "NO PARTICIPA" , "$ 10.35 + IVA", "NO PARTICIPA",  "NO PARTICIPA",  "NO PARTICIPA"],
            [ "BANORTE"         , "25162"           , "$ 6.00 + IVA" , "$ 6.00 + IVA",  "$ 6.00 + IVA",  "$ 6.00 + IVA",  "$ 6.00 + IVA"],
            [ "BBVA"            , "671517"          , "$ 0.00"       , "$ 7.76 + IVA",  "$ 6.89 + IVA",  "$ 0.00      ",  "$ 0.00"],
            [ "CITIBANAMEX (*)" , "PA:174801"       , "NO PARTICIPA" , "$ 9.50 + IVA",  "$ 0.00      ",  "$ 0.00      ",  "$ 0.00"],
            [ "HSBC"            , "7261"            , "$ 0.00"       , "$ 8.62 + IVA",  "NO PARTICIPA",  "$ 0.00      ",  "$ 0.00"],
            [ "SANTANDER"       , "4586"            , "$ 8.60 + IVA" , "$ 9.00 + IVA",  "$ 0.00      ",  "$ 0.00      ",  "$ 0.00"],
            [ "SCOTIABANK"      , "1089"            , "NO PARTICIPA" , "$ 6.00 + IVA",  "$ 7.00 + IVA",  "$ 7.00 + IVA",  "$ 7.00 + IVA"]
        ];

        // $logo_gobierno = asset('imgs/logo_puebla.png');

        $financiera =  [ "FINANCIERA BIENESTAR (TELECOMM)", "$ 4.00 + IVA por pagos con importe igual o menor a $ 267.00, en los demás casos será del 1.5 % del valor del importe más IVA."];


        $nombre_pdf = 'ORDEN_PAGO_'.$data['_curp'].'_'. date('Ymd') . '.pdf';

        $html = view('template.pdf_orden_de_pago', compact("instituciones", "financiera", "data"))->render();

        $pdf->loadHtml( $html );

        $pdf->setPaper('A4', 'portrait'); // ajusta el tamaño de papel

        $pdf->render(); // 6. Renderizar el PDF

        $pdf->stream($nombre_pdf, array("Attachment" => 1)); // 7. Descargar el

        //  https://styde.net/genera-pdfs-en-laravel-con-el-componente-dompdf/
    }
}
