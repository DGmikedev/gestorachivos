<?php

namespace App\Clases\Reportes;

require_once base_path('packages/utftfpdf/tfpdf/tfpdf.php');

class ReporteUno extends \tfpdf
{

    function __construct($_orientation='P', $_unit='mm', $_size='A4'){

        parent::__construct($_orientation, $_unit, $_size);
    }
    // Cabecera de página
    function Header()
    {
        // Logo
       $this->Image( asset('/imgs/logo_mdg.png'),10,8,33);
        $this->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $this->SetFont('DejaVu','',15);
        // Título
        $this->Cell(0,10,'REPORTE MUY IMPORTANTE','B',0,'C');
        // Salto de línea
        $this->Ln(15);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $this->SetFont('DejaVu','',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}','T',0,'R');
    }


    // $format, $clients, $nam_cli
    function create_report($format, $clients, $nam_cli){
        $doc = new  ReporteUno($format[0], $format[1], $format[2]);
        $doc->AliasNbPages();

        $doc->AddPage();
        $doc->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $doc->SetFont('DejaVu','',8);

        $doc->Cell(0,5,'Inicia body ',0,1);
        
        // Cabecera de tabla
        $doc->Cell(15,7,$nam_cli[0],1);
        $doc->Cell(35,7,$nam_cli[1],1);
        $doc->Cell(32,7,$nam_cli[2],1);
        $doc->Cell(32,7,$nam_cli[3],1);
        $doc->Cell(32,7,$nam_cli[4],1);
        $doc->Cell(32,7,$nam_cli[5],1);
        $doc->Cell(32,7,$nam_cli[6],1);
        $doc->Cell(32,7,$nam_cli[7],1);
        $doc->Cell(32,7,$nam_cli[8],1);
        $doc->Cell(32,7,$nam_cli[9],1);
        $doc->Cell(32,7,$nam_cli[10],1);
        $doc->Ln();


        // Datos de tabla
        foreach($clients as $row)
        {
            $doc->Row(
                $row[0],
                $row[1],
                $row[2],
                $row[3],
                $row[4],
                $row[5],
                $row[6],
                $row[7],
                $row[8],
                $row[9],
                $row[10]);
            /*$doc->Cell(15,10,$row[0],1);
            $doc->Cell(35,10,  $row[1],1);
            $doc->Cell(32,10,  $row[2],1);
            $doc->Cell(32,10,  $row[3],1);
            $doc->Cell(32,10,  $row[4],1);
            $doc->Cell(32,10,  $row[5],1);
            $doc->Cell(32,10,  $row[6],1);
            $doc->Cell(32,10,  $row[7],1);
            $doc->Cell(32,10,  $row[8],1);
            $doc->Cell(32,10,  $row[9],1);
            $doc->Cell(32,10,  $row[10],1);
            $doc->Ln();*/
        }
        
        $doc->Cell(0,5,'Termina body ',0,1);
        

        return $doc->Output();
    }

    // function createHeader($doc){
    //     for($i=1;$i<=400;$i++)
    //         $doc->Cell(0,5,'Imprimiendo línea número '.$i,0,1);
    // }
    

}


?>