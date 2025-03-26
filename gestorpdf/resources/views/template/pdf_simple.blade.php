<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Generación de PDF</title>
</head>

<style>
    html {
    	margin: 50pt 50pt;
        background-color: gray;
    }
    .sm-text{
        font-size: 12px;

    }
    .smm-text{
        font-size: 11px;
    }
    .md-text{
        font-size: 15px;
        
    }
    .table_pdf{
        border-collapse: collapse;
        
        padding: 10px;
        width: 100%;
    }

    body {
            font-family: Arial, sans-serif;
        }
        .content {
            margin-bottom: 100px; /* Para dejar espacio para el número de página */
        }
    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: right;
        font-size: 12px;
    }
    .row_align{
        text-align: center;
    }
</style> 
<body>
       <div class="container py-3">
        <div class="row_align" >
            <h2>CARÁCTERISTICAS DE DOMPDF</h2>
        </div>
        
            <table class="table_pdf">
                <tr>
                    <td colspan="2">
                        <p class="sm-text">Librería para generar Docuemntación en formato PDF, desde una funete de lenguaje HTML y PHP.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOCUMENTACION: &nbsp;&nbsp; 
                    </td>
                    <td>
                        <a href="https://github.com/dompdf/dompdf/tree/v0.6.2/www"> http://github.com/dompdf/dompdf/tree/v0.6.2/www </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="class=md-text">Funciones: </p> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="md-text" >CONTROLLER</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="sm-text">
                            <li>namespace App\Http\Controllers;  <span style="color:blue;">// nativo de laravel</span><li>
                            <li>use Illuminate\Http\Request;     <span style="color:blue;">// nativo de laravel</span><li>
                            <li>use Dompdf\Dompdf;               <span style="color:blue;">// Se trae la librería</span><li>
                            <li>use Dompdf\Options;              <span style="color:blue;">// Se trae el componente de Options de dompdf</span><li>
                            <li> $options = new Options();       <span style="color:blue;">// Se crea una instancía  de Options de DOM-PDF</span></li>
                            <li>$options->set('isPhpEnabled', true);          <span style="color:blue;">// Habilitar PHP dentro de HTML (si es necesario)</span></li>
                            <li>$options->set('isHtml5ParserEnabled', true);  <span style="color:blue;">// Habilitar análisis HTML5</span></li>
                            <li>$options->set('isRemoteEnabled', true); <span style="color:blue;">// Para habilitar funciones como imgs y otras.</span></li>
                            <li>$options->set('isJavascriptEnabled', true);     <span style="color:blue;">// Habilita la ejecucion de javascript</span></li>
                            <li>$options->set('isFontSubsettingEnabled', true); <span style="color:blue;">// Habilita la subconjunto de fuentes</span></li>
                            <li>$options->set('isCssFloatEnabled', true);       <span style="color:blue;">// Habilita la interpretacion de css float</span></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="sm-text">
                            <li>$dompdf = new Dompdf($options); <span style="color:blue;">// 2. Inicializar Dompdf</span></li>
                            <li>$data = [  'dato' => 'Name', 'dato2' => 'email' ]; <span style="color:blue;">// 3. Datos para contenido HTML </span> </li>
                            <li>$html = view('template.pdf_simple', $data)->render();<span style="color:blue;">// procesamiento de la vista</span></li>
                            <li>$dompdf->loadHtml($html);  <span style="color:blue;">//4. Cargar el HTML a Dompdf</span></li>
                            <li>$dompdf->setPaper('legal', 'portrait'); <span style="color:blue;">// ajusta el tamaño de papel</span></li>
                            <li>$dompdf->render(); <span style="color:blue;">// 6. Renderizar el PDF</span></li>
                            <li> $dompdf->stream('dompdf_basic.pdf', array("Attachment" => 1)); <span style="color:blue;">// 7. Descargar el PDF</span></li>
                        </ul>
                    </td>
                </tr>
            </table>

            <p class="md-text" >TAMAÑOS DE PAPEL</p>
            <p class="sm-text" >horizontal en A4 => $dompdf->setPaper('A4', 'landscape');, vertical   en A4 => $dompdf->setPaper('A4', 'portrait');</p>
            <table class="table_pdf">
                <tr>
                    <td>
                        <ul class="smm-text">
                            <li>$dompdf->setPaper('A4');    <span style="color:blue;">// A4 </span></li>
                            <li>$dompdf->setPaper('letter');    <span style="color:blue;">// Carta </span> </li>
                            <li>$dompdf->setPaper('legal');    <span style="color:blue;">// Legal </span>  </li>
                            <li>$dompdf->setPaper('A3');    <span style="color:blue;">// A3 </span></li>
                            <li>$dompdf->setPaper('A5');    <span style="color:blue;">// A5 </span></li>
                        </ul>
                    </td>
                    <td>
                        <ul  class="smm-text">
                            <li>$dompdf->setPaper('B5');    <span style="color:blue;">// B5 </span></li>
                            <li>$dompdf->setPaper('tabloid');    <span style="color:blue;">// Tabloid </span>  </li>
                            <li>$dompdf->setPaper('executive');    <span style="color:blue;">// Executive </span>  </li>
                            <li>$dompdf->setPaper('A6');    <span style="color:blue;">// A6 </span></li>
                            <li>$dompdf->setPaper('A7');    <span style="color:blue;">// A7 </span></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="smm-text">
                            <li>$dompdf->setPaper('A8');    <span style="color:blue;">// A8 </span></li>
                            <li>$dompdf->setPaper('C6');    <span style="color:blue;">// A9 </span></li>
                            <li>$dompdf->setPaper('A9');    <span style="color:blue;">// B4 </span></li>
                            <li>$dompdf->setPaper('B4');    <span style="color:blue;">// B6 </span></li>
                            <li>$dompdf->setPaper('B6');    <span style="color:blue;">// C4 </span></li>
                        </ul>
                    </td>
                    <td>
                        <ul  class="smm-text">
                            <li>$dompdf->setPaper('C4');    <span style="color:blue;">// C5 </span></li>
                            <li>$dompdf->setPaper('C5');    <span style="color:blue;">// C6 </span></li>
                            <li>$dompdf->setPaper('folio');    <span style="color:blue;">// Folio </span>  </li>
                            <li>$dompdf->setPaper([ancho, largo])  <span style="color:blue;">// Custom </span> </li>
                        </ul>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <br>
            <p class="md-text" >TAMAÑOS DE DOCUMENTOS POR MEDIO DE MATRICES</p>
            <p class="sm-text">$dompdf->setPaper(array(0,0,792.00, 1224.00), 'portrait'); </p>
            <table class="sm-text table_pdf">
                    <tr><td>"a0" => array(0,0,2383.94,3370.39)</td>                <td>"b0" => array(0,0,2834.65,4008.19)</td>             <td>"c0" => array(0,0,2599.37,3676.54)</td></tr>
                    <tr><td>"a1" => array(0,0,1683.78,2383.94)</td>                <td>"b1" => array(0,0,2004.09,2834.65)</td>             <td>"c1" => array(0,0,1836.85,2599.37)</td></tr>
                    <tr><td>"a2" => array(0,0,1190.55,1683.78)</td>                <td>"b2" => array(0,0,1417.32,2004.09)</td>             <td>"c2" => array(0,0,1298.27,1836.85)</td></tr>
                    <tr><td>"a3" => array(0,0,841.89,1190.55)</td>                 <td>"b3" => array(0,0,1000.63,1417.32)</td>             <td>"c3" => array(0,0,918.43,1298.27)</td></tr>
                    <tr><td>"a4" => array(0,0,595.28,841.89)</td>                  <td>"b4" => array(0,0,708.66,1000.63)</td>              <td>"c4" => array(0,0,649.13,918.43)</td></tr>
                    <tr><td>"a5" => array(0,0,419.53,595.28)</td>                  <td>"b5" => array(0,0,498.90,708.66)</td>               <td>"c5" => array(0,0,459.21,649.13)</td></tr>
                    <tr><td>"a6" => array(0,0,297.64,419.53)</td>                  <td>"b6" => array(0,0,354.33,498.90)</td>               <td>"c6" => array(0,0,323.15,459.21)</td></tr>
                    <tr><td>"a7" => array(0,0,209.76,297.64)</td>                  <td>"b7" => array(0,0,249.45,354.33)</td>               <td>"c7" => array(0,0,229.61,323.15)</td></tr>
                    <tr><td>"a8" => array(0,0,147.40,209.76)</td>                  <td>"b8" => array(0,0,175.75,249.45)</td>               <td>"c8" => array(0,0,161.57,229.61)</td></tr>
                    <tr><td>"a9" => array(0,0,104.88,147.40)</td>                  <td>"b9" => array(0,0,124.72,175.75)</td>               <td>"c9" => array(0,0,113.39,161.57)</td></tr>
                    <tr><td>"a10" => array(0,0,73.70,104.88)</td>                  <td>"b10" => array(0,0,87.87,124.72)</td>               <td>"10" => array(0,0,79.37,113.39)</td></tr>
                    <tr><td>"ra0" => array(0,0,2437.80,3458.27)</td>               <td>"sra0" => array(0,0,2551.18,3628.35)</td>           <td>"letter" => array(0,0,612.00,792.00)</td></tr>
                    <tr><td>"ra1" => array(0,0,1729.13,2437.80)</td>               <td>"sra1" => array(0,0,1814.17,2551.18)</td>           <td>"legal" => array(0,0,612.00,1008.00)  </td></tr>
                    <tr><td>"ra2" => array(0,0,1218.90,1729.13)</td>               <td>"sra2" => array(0,0,1275.59,1814.17)</td>           <td>"ledger" => array(0,0,1224.00, 792.00) </td></tr>
                    <tr><td>"ra3" => array(0,0,864.57,1218.90)</td>                <td>"sra3" => array(0,0,907.09,1275.59)</td>            <td>"tabloid" => array(0,0,792.00, 1224.00) </td></tr>
                    <tr><td>"ra4" => array(0,0,609.45,864.57)</td>                 <td>"sra4" => array(0,0,637.80,907.09)</td>             <td>"executive" => array(0,0,521.86,756.00)  </td></tr>
                    <tr><td>"folio" => array(0,0,612.00,936.00)  </td>            <td>"4a0" => array(0,0,4767.87,6740.79)</td>            <td>"2a0" => array(0,0,3370.39,4767.87)</td> </tr>
                    <tr><td>"commercial #10 envelope" => array(0,0,684,297)</td>  <td>"8.5x11" => array(0,0,612.00,792.00)</td>           <td>"catalog #10 1/2 envelope" => array(0,0,648,864)</td> </tr>
                    <tr><td>"8.5x14" => array(0,0,612.00,1008.0)</td>             <td colspan="2">"11x17" => array(0,0,792.00, 1224.00)</td> </tr>
            </table>

            <br>
            <p class="md-text" >NUMERO DE PÁGINA</p>
            <p class="sm-text" >INCLUIR AL FINAL DE LA PÁGINA DEL HTML</p>
            <table class="sm-text table_pdf">
                <tr>
                    <td>
                        if ( isset($pdf) ) { <br>
                            &nbsp;&nbsp;$text = "Página {PAGE_NUM} de {PAGE_COUNT}";<br>
                            &nbsp;&nbsp;$font = $fontMetrics->get_font("helvetica");<br>
                            &nbsp;&nbsp;$size = 8;<br>
                            &nbsp;&nbsp;$y = $pdf->get_height() - 35;<br>
                            &nbsp;&nbsp;$x = $pdf->get_width() - 15 - $fontMetrics->get_text_width($text, $font, $size);<br>
                            &nbsp;&nbsp;$pdf->page_text($x, $y, $text, $font, $size);<br>
                        }
                    </td>
                </tr>
            </table>

        </div>
         <!-- Aquí se imprimirá el número de página en el pie de página -->
         <script type="text/php">
            if ( isset($pdf) ) {
                $text = "Página {PAGE_NUM} de {PAGE_COUNT}";
                $font = $fontMetrics->get_font("helvetica");
                $size = 8;
                $y = $pdf->get_height() - 35;
                $x = $pdf->get_width() - 15 - $fontMetrics->get_text_width($text, $font, $size);
                $pdf->page_text($x, $y, $text, $font, $size);
            }
        </script>
</body>
</html>









