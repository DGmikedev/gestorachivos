## Membrete multipagina

( Tiene cabecera, pie de página )
```bash

url:     /membretada
Router:  Route::get('/membretada', [MembretadaController::class, 'gen_membretada']);
view:  /app/Http/Controllers/MembretadaController.php
Clase_usada: /app/Clases/Mpdf.php

```
![alt text](public/imgs/demo_membretada_multi_pagina.png)

## Factura de uan sola página

### Solo una pagina por factura
( Oportunidad para hacerla multipagina )
```bash

url:     /factura
Router:  Route::get('/factura', [FacturaController::class, "gen_factura"]);
view:    resources/views/template/pdf_factura.blade.php
Controller: /app/Http/Controllers/FacturaController.php
Clase_usada: /app/Clases/Mpdf.php

```

![alt text](public/imgs/demo_factura_una_pagina.png)
