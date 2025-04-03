
![alt text](image-1.png)

## Orden de pago de una sola página

```bash

url:     /orden_pago
Router: Route::get('/orden_pago', [OrdenPago::class, "genera_orden"]);
view:   resources/views/template/pdf_orden_de_pago.blade.php
Controller:  app/Http/Controllers/OrdenPago.php
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
