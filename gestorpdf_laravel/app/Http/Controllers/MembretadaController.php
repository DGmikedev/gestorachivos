<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\Mpdf;

class MembretadaController extends Controller
{
    public function gen_membretada(){


        $membretada = new Mpdf('membretada.pdf', ['A4', 'letter'], 'template.pdf_membretada', true,  [true, true, true, true, true, true] );

        $data =  Array();

        $data['titulo_pagHTML'] = "Titulo Pagina de descarga";

        $data['encabezdo'] = [ 
            'img_1' => asset('/imgs/membretada/cintillo_sup_izq.png'), 
            'img_2' => asset('/imgs/membretada/cintillo_sup_der.png'), 
            'secretaria' => 'SECRETARÍA DE GOBIERNO DIRECCIÓN GENERAL JURÍDICA Y DE ENLACE LEGISLATIVO',
            'lugar_y_fecha' => 'Ciudad de México, a 7 de septiembre de 2020',
            'oficio' => 'OFICIO NO. SG/DGJyEL/RPA/0421/2020'
        ];


        // $data['encabezado']['departamento'] = "";



        return $membretada->generaPDF($data);

        // return "<h1>Hola Membretada; </h1>";


    }
}
