# FPDF ES UNA LIBRERÍA PARA GENERAR PDF DE MANERA PROGRAMÁTICA

# TFPDF ES UNA EXTENSIÓN DE LA LIBRERÍA ( FPDF )

## SOLO QUE EN ESTA EXTENSIÓN SE PUEDE USAR ACENTOS Y LAS LETRAS Ñ
## YA QUE TIENE SOPORTE UTF-8

INSTALACIÓN:

1 - INSTALACIÓN DE FPDF VÍA COPOSER:  composer require fpdf/fpdf

ESTO INSTALARÁ LA LIBRERÍA EN LA CARPETA VENDOR

2 - DESCARGAR PAQUETE TFPDF EN : https://www.fpdf.org/en/script/script92.php

2.1 - CREAR UNA CARPETA AL NIVEL DE LAS CARPETAS PUBLIC, DATABASE, APP ETC CON EL NOMBRE "packages"
2.2 - CREAR UNA CARPETA CON NOMBRE DEL PAQUETE EN EL PROYECTO PARA ESTE CASO "utftfpdf"
2.3 - GUARDAR DENTRO DE ESTA CARPETA EL CONTENIDO DESCARGADO EN EL PASO 2
2.4 - EN EL ARCHVIO composer.json DEL PAQUETE COLOCAR EL SIGUIENTE CONTENIDO:

```json
{
    "name": "utftfpdf/tfpdf",
    "description": "tFPDF - FPDF con soporte UTF-8 para Laravel",
    "type": "library",
    "autoload": {
      "classmap": ["."]
    },
    "license": "MIT",
    "minimum-stability": "dev",
    "prefer-stable": true
  }

```
DONDE : "name": "utftfpdf/tfpdf", CONTIENE EL NOMBRE LA CARPETA CONTENEDORA Y EL NOMBRE DE LA CALSE tfpdf.php

3 - EN EL ARCHVIO composer.json DEL PROYECTO HASTA LA PARTE INFERIOR ANTES DEL "}" DE CIERRE COLOCAR EL SIGUIENTE CONTENIDO:

```json
 "repositories": [
        {
            "type": "path",
            "url": "packages/utftfpdf/tfpdf"
        }
    ]
```

4 - CORRER ESTE COMANDO EN COMPOSER:

```bash

composer require utftfpdf/tfpdf:dev-main

```

NOTA: NO OLVIDAR ADJUNTAR AL ARCHVIO .gitignore LA CARPETA /PACKAGES PARA EVITAR SUBIR A LOS REPOSITORIOS


