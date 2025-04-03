<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ExpendeCredencial</title>

    <style>
        @page {
            margin: 20px 5px;
            font-family: monospace;
            background-color: #3498db; 
        }

        /*
        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 10px;
            font-size: 8px !important;
            background-color: #b0e2eb;
            color: #000000;
            text-align: center;
        }
        */
        footer {
            position: fixed; 
            bottom: -5px; 
            left: 0px; 
            right: 0px;
            height: 10px; 
            font-size: 8px !important;
            background-color: #ffffff;
            color: #000000;
            text-align: center;
        } 
        :root{
            --fnt-big: 10px;
            --fnt-sml: 7px;
        }
        .contenedor{
            display:flex;
            flex-direction: column;
            justify-content:flex-end;
            height: 100vh; 
            
        }
       html body{
            background-image: url({{ asset('imgs/logo1.png') }}); /* Ruta de la imagen */
            background-size: cover; /* Asegura que la imagen cubra toda la pantalla */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita que la imagen se repita*/
        }
      
    </style>
</head>
<body>
    <header></header>
    <main>
        <div class="contenedor">
            <hr style="color:red;">
            <table style="border:1px solid #ffffff; width:100%">
                <tr>
                    <td ></td>
                    <td style="
                        width: 1cm;
                        height:1cm;
                        border-bottom: 1px solid #000; 
                        border-top:    1px solid #000; 
                        border-right:  1px solid #000;
                        border-left:   1px solid #000; 
                    "> 1 x 1 </td>
                    <td></td>
                </tr>
            </table>
            <table style="border:1px solid #ffffff; width:100%">
            <tr>
                <td ></td>
                <td style="
                    width:2.5cm;
                    height:3cm;
                    border-bottom: 1px solid #000; 
                    border-top:    1px solid #000; 
                    border-right:  1px solid #000;
                    border-left:   1px solid #000; 
                "> 35 x 50 </td>
                <td></td>
            </tr>
        </table>
        <div><span style="color:white; font-size:5px">.</span></div>
        <table width="100%" >
            <tr style="padding-top: 20px" >
                <td style="font-size:var(--fnt-big); text-align:center; "><u>JUAN ANGEL SANCHEZ MILEI</u></td>
            </tr>
            <tr style="padding:10px">
                <td style="font-size:var(--fnt-sml); text-align: center;">NOMBRE</td>
            </tr>
            <tr style="padding:10px">
                <td style="font-size:var(--fnt-big); text-align:center; "><u>DESARROLLADOR JR</u></td>
            </tr>
            <tr style="padding:10px">
                <td style="font-size:var(--fnt-sml); text-align: center;">PUESTO: </td>
            </tr>
            <tr style="padding:10px">
                <td style="font-size:var(--fnt-big); text-align: center;"><u>SEGURIDAD INFORMÁTICA</u></td>
            </tr>
        </table>
          
        </div>
    </main>
    <footer>
        <p>footer</p>
    </footer>
</body>

<!-- 
  <table 
                style="

                    top: 50px;
                    border:1px solid black;
                    border-radius:5px;
                    width: 100%;
                    heigth:100%;

            ">
                <tr>
                    <td ></td>
                    <td style="
                        width:2.5cm;
                        height:3cm;
                        border-bottom: 1px solid #000; 
                        border-top:    1px solid #000; 
                        border-right:  1px solid #000;
                        border-left:   1px solid #000; 
                    "> 35 x 50 </td>
                    <td></td>
                </tr>
            </table>

            <table width="100%"  style="border:1px solid black;">
                <tr style="padding:10px" >
                    <td style="font-size:var(--fnt-big); text-align:center; "><u>JUAN ANGEL SANCHEZ MILEI</u></td>
                </tr>
                <tr style="padding:10px">
                    <td style="font-size:var(--fnt-sml); text-align: center;">NOMBRE</td>
                </tr>
                <tr style="padding:10px">
                    <td style="font-size:var(--fnt-big); text-align:center; "> DESARROLLADOR JR</td>
                </tr>
                <tr style="padding:10px">
                    <td style="font-size:var(--fnt-sml); text-align: center;">PUESTO: </td>
                </tr>
                <tr style="padding:10px">
                    <td style="font-size:var(--fnt-big); text-align: center;"> SEGURIDAD INFORMÁTICA</td>
                </tr>
            </table>

-->
</html>