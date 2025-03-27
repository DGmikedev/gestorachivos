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

    /** Colors - Temas **/
    --color-contraste: white;       /* Cuando se use el color para resaltar este colro en fuente*/
    --color-resaltar:  #ec7063;     /* Cunado algo se requiera resaltar */  /* opc #d5d8dc; */
    --color-resaltar-lght: #fadbd8; /* Cuando se requira dar seguimiento al resaltado pero en diferencia al mismo*/
    --color-back-gral: #ffffff;     /* Color de fondo del documento */  


    /** Tamaños de letras **/
    --grande: 13px;  /* Nombres y datos relevantes eje: No de Factura, RFC  */
    --mediana: 11px;  /* Descripciones */
    --chica:9px;     /* Descripciones largas que requieren estar ahí, las letras chiquitas */

    /** Fuentes **/
    --fonnt-gral: monospace;  /*  monospace  */

    /** Fuerzas de fuente **/
    --negrita: bold;
    --cursiva: italic;

    /* Alineacion */
    --zqiuerda: left;
    --derecha: right; 
    --centro: center;

    /* Delimitción del docuemnto */
    --margen-doc: 10px;
    --padding-doc: 10px;

    

  }

  html{
    margin: var(--margen-doc);
    
    font-family: var(--fonnt-gral);
  }

  body{
    background-color: var(--color-back-gral);
    padding: var(--padding-doc);
  }

  .resaltado{
    background-color: var(--color-resaltar);
    color: var(--color-contraste);
  }

  .tbl-linea-normal{
    border: 1px solid black;
    border-collapse: collapse;
  }

  .tbl-linea-resaltado{
    border: 1px solid var(--color-resaltar);
    border-collapse: collapse;
  }

  /*
  .tbl_cabecera{
    background-color: var(--color-back-td);
    width:100%;
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
    font-size: var(--parrafos);
  }

  body{
    margin:5px;
    font-family: var(--fonnt-gral);
    background-color:#f2f4f4;
  }

  .titulos{
    font-size: var(--titulos);
    font-weight: bold;;
  }
  .subtitulos{
    font-size: var(--subtitulos);
  }
  .parrafos{
    font-size: var(--parrafos);
  }
*/


</style>
<body>


  <table width="100%" style="border-bottom:2px solid var(--color-resaltar);">
    <tr>
      <td width="20%" style="text-align:center">LOGO</td>
      <td width="10%" style="text-align:center"></td>
      
      <td width="70%">
        
        <span 
          style="font-size:var(--grande);
                 font-weight: var(--negrita);
                 text-align:left;
          ">  
          JUAN HERNANDEZ GOMÉZ   <br>
        </span>

        <span style="font-size:var(--mediana);">  
        <span style="font-weight: var(--negrita);">RFC: HSJUCND456TY</span><br> 
          Calle falsa 123 <br>
          Col Falsa CP 12365 <br>
          Ciudad de México, México, Tel: 12595632542 <br>
          Correo eléctronico: mi_correo@mail.com <br>
          Regimen fiscal: 612 - Persona fisica con actividades empresariales y profesionales.
      </td>
    </tr>
  </table>

  <table width="100%" >
    <tr>
      <td width="75%"></td>
      <td width="25%" 
          class="resaltado" 
          style=" font-size:var(--mediana); 
                   text-align:right;
      ">
        TIPO DE COMPROBNTE:<span style="font-weight: var(--negrita);" >INGRESO</span>
      </td>
    </tr>
  </table>

  <table width="100%">

    <tr class="resaltado" style=" font-size:var(--mediana); ">

      <td width="70%">DATOS CLIENTE\RECEPTOR:</td>

      <td width="30%" style=" text-align:right; "> 

          FACTURA NUMERO: <span style=" font-weight:var(--negrita); ">12652548125</span>

      </td>
    </tr>
    <tr style=" font-size:var(--mediana); ">

      <td width="70%">
        <span style="font-weight: var(--negrita); font-size:var(--grande);">  OSCAR GIL GOMÉZ SANCHEZ  </span> <br>
        <span style="font-weight: var(--negrita); font-size:var(--mediana);"> RFC: DFGVB9987890 </span> <br>
        <span style="font-size:var(--chica);">  Calle falsa 123
          Col Falsa CP 12365 Ciudad de México<br>
          USO DE CFDI: G03 - Gastos en general <br>
          Tel: 12595632542
        </span>
      </td>

      <td width="30%" style=" text-align:right; "> 

        <!-- inicia Pequeña tabla -->
        <table width="100%" style="font-size:var(--chica);">
          <tr>
            <td style="background-color:var(--color-resaltar-lght);">LUGAR Y FECHA DE EXPEDICIÓN:</td>
          </tr>
          <tr>
            <td >CP: 05200  13/02/2023 13:00:00 </td>
          </tr>
          <tr>
            <td style="background-color:var(--color-resaltar-lght);">FECHA Y HORA DE EMISIÓN:</td>
          </tr>
          <tr>
            <td > 13/02/2023 13:00:00</td>
          </tr>
        </table>
        <!-- fin Pequeña tabla -->

      </td>
    </tr>
  </table>

  <table class="tbl-cliente" >
    <tr class="resaltado" 
        style="text-align:center;
                font-size:var(--mediana)
      ">

      <td style=" width:25%;" >Numero de serie de SCD del emisor:</td>
      <td style=" width:25%;" >Folio Fiscal/ UUID</td>
      <td style=" width:25%;">Numero de serie del SCD del SAT</td>
      <td style=" width:25%;">Fecha y hora de certificación</td>
    </tr>
    <tr 
      style="
        text-align:center;
        background-color:var(--color-resaltar-lght);
        font-size: var(--chica);
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


<!-- 
  <table class="tbl-cliente" >
    <tr class="resaltar" >
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
-->
</body>
</html>