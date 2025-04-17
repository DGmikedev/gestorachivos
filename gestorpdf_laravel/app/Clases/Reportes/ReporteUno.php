<?php

namespace App\Clases\Reportes;

require_once base_path('packages/utftfpdf/tfpdf/tfpdf.php');

//use Fpdf\Fpdf;

class ReporteUno  extends \tfpdf
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
        // $doc = new Fpdf($format[0], $format[1], $format[2]);
        $doc->AliasNbPages();

        $doc->AddPage();
        $doc->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $doc->SetFont('DejaVu','',8);

        $doc->Cell(0,5,'Inicia body ',0,1);
        
        // Cabecera de tabla

        $doc->SetWidths(array(30, 50, 30, 40));


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
                array( 
                $row[0]  ,
                $row[1]  ,
                $row[2]  ,
                $row[3]  ,
                $row[4]  ,
                $row[5]  ,
                $row[6]  ,
                $row[7]  ,
                $row[8]  ,
                $row[9]  ,
                $row[10]
                )
            );
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


    function Row($data)
    {
        // Calculate the height of the row
        $nb = 0;
        for($i=0;$i<count($data);$i++)
            $nb = max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h = 5*$nb;
        // Issue a page break first if needed
        $this->CheckPageBreak($h);
        // Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            // Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            // Draw the border
            $this->Rect($x,$y,$w,$h);
            // Print the text
            $this->MultiCell($w,5,$data[$i],0,$a);
            // Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        // Go to the next line
        $this->Ln($h);
    }

	function SetWidths($w)
	{
	    // Set the array of column widths
	    $this->widths = $w;
	}	
	function SetAligns($a)
	{
	    // Set the array of column alignments
	    $this->aligns = $a;
	}

	function CheckPageBreak($h)
    {
        // If the height h would cause an overflow, add a new page immediately
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt)
    {
        // Compute the number of lines a MultiCell of width w will take
        if(!isset($this->CurrentFont))
            $this->Error('No font has been set');
		//dump($this->CurrentFont);
        $cw = $this->CurrentFont['cw'];
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
        $s = str_replace("\r",'',(string)$txt);
        
        $nb = strlen($s);

        //var_dump($nb);
        if($nb>0 && $s[$nb-1]=="\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while($i<$nb)
        {
            $c = $s[$i];
            // dump($cw[$c]);
            if($c=="\n")
            {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep = $i;
            
            $l += $cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i = $sep+1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }
    

}


?>