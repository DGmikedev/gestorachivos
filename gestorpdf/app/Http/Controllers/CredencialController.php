<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\Mpdf;


class CredencialController extends Controller
{
    /*
        LAS CREDENCIALES NECESITAN RECALCULO DE LAS DIMENSIONES DEL DOCUEMNTO: 

        ANCHO = 5.4 cm
        LARGO = 8.6 cm

        x           =  pts  -  Medida en que pdf mide su docuemnto
        0.03527778  =  factor de conversion pulgadas 
                            * 1 pulgada (inch) = 72 puntos (pts)
                            * 1 pulgada (inch) = 2.54 centímetros (cm)
                            * por tanto: 1pt = 72 / 2.54​cm  ≈ 0.03527778cm 
        cm´s deseados = -----¬
                            _|___
        X  *  0.03527778 = | 5.4 |  pts -> despeje -> [ X = 5.4 / 0.03527778 ] = 153.0708 pts
                           |     |
        X  *  0.03527778 = | 8.6 |  pts -> despeje -> [ X = 8.6 / 0.03527778 ] = 243.7795 pts
                           ------
    */
    public function gen_credencial(){

                                                         //width     height      portrait 
                           // $pdf->setPaper(  array(0,0, 153.0708,  243.7795 ), 'portrait');

        $credencial = new Mpdf('credencial.pdf', [array(0,0,153.0708,243.7795), 'portrait'], 'template.pdf_credencial', true,  [true, true, true, true, true, true] );
        
        $data=['nombre_credencial'];

        return $credencial->generaPDF($data);

    }

}
