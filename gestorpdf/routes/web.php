<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dompdf_gen;
use App\Http\Controllers\OrdenPago;

Route::get('/', function () {return view('welcome'); });
Route::get('/dompdf',  [Dompdf_gen::class, "genera_dompdf"] );
Route::get('/orden_pago', [OrdenPago::class, "genera_orden"]);