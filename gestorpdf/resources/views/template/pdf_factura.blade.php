<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  /*
  #5dade2 -- azul
  #d6eaf8 -- azul calro
  */
  :root{
    --color-contraste: white;
    --color-resaltar:  #ec7063; /* #d5d8dc; */
    --color-bckgd-rsltr: #fadbd8;
    --color-char1: black;

    /** tamaños de letras **/
    --titulos: 17px;
    --subtitulos: 15px;
    --parrafos:13px;

    /** Fuentes **/
    --fonnt-gral: monospace
  }

  .tbl_cabecera{
    background-color: var(--color-back-td);
    width:100%;
    /* border-top: 2px solid var(--color-border-table); */
    border-bottom: 2px solid var(--color-resaltar);
    padding: 5px;
  }

  .tbl-cliente{
    border: 2px solid var(--color-resaltar);
    width:100%;

  }

  .row-resaltar{
    background-color: var(--color-resaltar); 
    text-align:right;
    color: var(--color-contraste);
  }

  body{
    margin: 20px;
    font-family: var(--fonnt-gral);
    background-color:#f2f4f4;
  }

  .titulos{
    font-size: var(--titulos);
    font-weight: bold;;
  }
  .subtotuilos{
    font-size: var(--subtitulos);
  }
  .parrafos{
    font-size: var(--parrafos);
  }


</style>
<body>

  
   
  <table class="tbl_cabecera"  style=" color: var(--color-char1);  ">
    <tr>
      <td style=" width:20%">LOGOTIPO</td>
      <td style=" width:50%">
           <p>
              <span class="titulos">  JUAN HERNANDEZ GOMÉZ   <br>
                RFC: HSJUCND456TY </span> <br>
              <span class="parrafos">  Calle falsa 123
                Col Falsa CP 12365 <br>
                Ciudad de México, México, Tel: 12595632542 <br>
                Correo eléctronico: mi_correo@mail.com <br>
                Regimen fiscal: 612 - Persona fisica con actividades empresariales y profesionales.
              </span>
           </p>
      </td>
    </tr>
  </table>

  <table width="100%" >
    <tr>
      <td width="70%"></td>
      <td  class="row-resaltar">
        TIPO DE COMPROBNTE: INGRESO
      </td>
    </tr>
  </table>

  <table class="tbl-cliente" >
    <tr class="row-resaltar" >
      <td 
        style="text-align: left;"
      >
        DATOS CLIENTE\RECEPTOR:
      </td>
      <td >
        FACTURA NUMERO: <span class="titulos">12652548125</span>
      </td>
    </tr>
    <tr>
      <td style="width:60%; vertical-align:top; " >
           
              <span style="font-weight: bold;" class="subtitulos">  OSCAR GIL GOMÉZ SANCHEZ  </span> <br>
              <span style="font-weight: bold;"> RFC: DFGVB9987890 </span> <br>
              <span class="parrafos">  Calle falsa 123
                Col Falsa CP 12365 Ciudad de México<br>
                USO DE CFDI: G03 - Gastos en general <br>
                Tel: 12595632542
              </span>
           
      </td>
      <td style=" width:40%">
        <table width="100%" >
          <tr>
            <td style="background-color:var(--color-bckgd-rsltr);">LUGAR Y FECHA DE EXPEDICIÓN:</td>
          </tr>
          <tr>
            <td >CP: 05200  13/02/2023 13:00:00 </td>
          </tr>
          <tr>
            <td style="background-color:var(--color-bckgd-rsltr);">FECHA Y HORA DE EMISIÓN:</td>
          </tr>
          <tr>
            <td > 13/02/2023 13:00:00</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <table class="tbl-cliente" >
    <tr class="row-resaltar" style="text-align:center;" >
      <td style=" width:25%;" >Numero de serie de SCD del emisor:</td>
      <td style=" width:25%;" >Folio Fiscal/ UUID</td>
      <td style=" width:25%;">Numero de serie del SCD del SAT</td>
      <td style=" width:25%;">Fecha y hora de certificación</td>
    </tr>
    <tr class="row-resaltar" 
      style="
        text-align:center;
        background-color:var(--color-bckgd-rsltr);
        color:var(--color-char1)
      " >
      <td style=" width:25%;" >9ERCR-R267643GV-F34D784-11SDFC</td>
      <td style=" width:25%;" >3DDFR-DFR234FGV-FGTH784-45RFTG</td>
      <td style=" width:25%;">30001000000400002495</td>
      <td style=" width:25%;">2023-10-03T17:42:30</td>
    </tr>
  </table>
  <table>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
     
</body>
</html>