<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>SERVICIOS | GENERA PAGO</title>
</head>

<style>
   /* Texto de uso en forma general del PDF   tbl_left txt_body */
   .txt_body{
        font-size:13px
    }

    .tbl_left{   
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 5px;
        padding-right: 5px;
        width:100%;
        text-align: left;
        border:collapse;
        border-top: 1px #c0392b solid;
        ;
    }

    .color_denotar{
        background-color:#ebedef;
    }

    .ltrs_rosas{
        color:#c0392b ;
    }

    .mensaje{
    text-align: center;
    font-size:11px;
}
.minimensaje{
    text-align: center;
    font-size:8px;
}
.table_snborde{
    width:100%;
    border: 0px solid;
    border-color: #ebedef;
    text-align:center;
}
.rodea_centra{
    border-top:    1px solid  #abb2b9 ;
    border-left:   1px solid  #abb2b9 ;
    border-right:  1px solid  #abb2b9 ;
    border-bottom: 1px solid  #abb2b9 ;
    text-align: center;
    paading:1px;
}
.rodea_izquierda{
    border-top:    1px solid  #abb2b9 ;
    border-left:   1px solid  #abb2b9 ;
    border-right:  1px solid  #abb2b9 ;
    border-bottom: 1px solid  #abb2b9 ;
    text-align: left;
    paading:1px;
}
html{
    padding:12px;
}

</style>

<body>
    <table class="table_snborde">
        <tr>
          <td> <img src="{{ $logo_gobierno  }}" alt="logo"> </td>
          <td><span class="ltrs_rosas">
            SECRETARÍA DE PLANEACIÓN, FINANZAS Y ADMINISTRACIÓN<br>
            DEL GOBIERNO DEL ESTADO DE PUEBLA</span> <br>
            ORDEN DE COBRO
          </td>
          <td> LOGO</td>
        </tr>
      </table>

    <table class=" tbl_left txt_body">
        <tr>
          <td>NOMBRE DEL CONTRIBUYENTE:</td>
          <td></td>
          <td>FOLIO DE SEGUIMIENTO::</td>
          <td></td>
        </tr>
        <tr>
          <td>RFC:</td>
          <td></td>
          <td>CURP:</td>
          <td></td>
        </tr>
        <tr>
          <td>DESCRIPCIÓN DEL SERVICIO:</td>
          <td></td>
          <td>NO. DE MOVIMIENTOS:</td>
          <td></td>
        </tr>
        <tr>
          <td>VIGENCIA DE LA REFERENCIA:</td>
          <td></td>
          <td>EMISIÓN DE LA REFERENCIA::</td>
          <td></td>
        </tr>
      </table>

    <table class="tbl_left txt_body color_denotar">
        <tr>
            <td>Importe con letra: MIL DOSCIENTO SESENTA PESOS 00/100 MXN</td>
            <td>NO. DE MOVIMIENTOS: $ 1,260.00</td>
        </tr>
    </table>

    <table class="tbl_left txt_body color_denotar">
        <tr>
          <td>CONCEPTO DE PAGO SPEI:</td>
          <td>13525146337745399268</td>
        </tr>
        <tr>
          <td>REFERENCIA SPEI:</td>
          <td>0671517</td>
        </tr>
        <tr>
          <td>BANCO BENEFICIARIO O DESTINO:</td>
          <td>BBVA | GOBIERNO DEL ESTADO DE PUEBLA</td>
        </tr>
        <tr>
          <td>CUENTA CLABE BENEFICIARIA O DESTINO:</td>
          <td>012914002006715170</td>
          <td rowspan="3">LOGO SPEI</td>
        </tr>
    </table>
    <table class="tbl_left" style="padding:2px" >
        <tr>
          <td class="mensaje">Puede realizar su pago en las siguientes instituciones, el cual generará un costo por comisión, que se da a conocer en las columnas de comisión
          </td>
        </tr>
    </table>
    <table
        style=" 
        width:100%; 
        border: 1px solid #ebedef;
        border-collapse: collapse;
        font-size: 12px;
        "
    >
        <tr>
            <td class="ltrs_rosas rodea_centra" rowspan="3">NOMBRE DE LA INSTITUCIÓN</td>
            <td class="ltrs_rosas rodea_centra" rowspan="3">NÚMERO DE
                CONVENIO</td>
            <td class="ltrs_rosas rodea_centra" colspan="5">MONTO DE LA COMISIÓN</td>
        </tr>
        <tr>
            <td rowspan="2"class="ltrs_rosas rodea_centra">CAJEROS AUTOMÁTICOS</td>
            <td rowspan="2"class="ltrs_rosas rodea_centra">VENTANILLA</td>
            <td rowspan="2"class="ltrs_rosas rodea_centra">CARGO A CUENTA DE CHEQUES</td>
            <td colspan="2" class="ltrs_rosas rodea_centra">PAGOS DE SERVICIOS:</td>
        </tr>
        <tr>
            <td class="ltrs_rosas rodea_centra">BANCA ELECTRÓNICA</td>
            <td class="ltrs_rosas rodea_centra">BANCA MÓVIL</td>
        </tr>
  
        @foreach($instituciones as $e)
        <tr>
            <td class="rodea_centra">{{ $e[0] }}</td>
            <td class="rodea_izquierda">{{ $e[1]}} </td>
            <td class="rodea_izquierda">{{ $e[2]}} </td>
            <td class="rodea_izquierda">{{ $e[3]}} </td>
            <td class="rodea_izquierda">{{ $e[4]}} </td>
            <td class="rodea_izquierda">{{ $e[5]}} </td>
            <td class="rodea_izquierda">{{ $e[6]}} </td>
        </tr>
        @endforeach
        <tr>
            <td class="rodea_centra">{{ $financiera[0] }}</td>
            <td class="mensaje rodea_izquierda" colspan="6">{{ $financiera[1] }}</td>
        </tr>
    </table>
    <table class="minimensaje" style="text-align: left;">
        <tr><td>(*) Sin costo para clientes de Citibanamex</td></tr>
        <tr><td>También puede realizar el pago en estos sitios con una comisión máxima de $ 12.00 mas IVA.</td></tr>
    </table>
    <table style="width:100%">
        <tr>
        <td  style="width: 10%;" >LOGO 1</td>
        <td  style="width: 10%;" >LOGO 2</td>
        <td  style="width: 10%;" >LOGO 3</td>
        <td  style="width: 10%;" >LOGO 4</td>
        <td  style="width: 10%;" >LOGO 5</td>
        <td  style="width: 50%; text-align:right;" >LOGO 6</td> </tr>
    </table>

    
    
</body>
</html>