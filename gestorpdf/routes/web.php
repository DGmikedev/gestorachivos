<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dompdf_gen;
use App\Http\Controllers\OrdenPago;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\MembretadaController;
use App\Http\Controllers\CredencialController;
use App\Http\Controllers\ManipulateController;
use App\Http\Controllers\ReporteController;

Route::get('/', function () {return view('welcome'); });
Route::get('/dompdf',  [Dompdf_gen::class, "genera_dompdf"] );
Route::get('/orden_pago', [OrdenPago::class, "genera_orden"]);
Route::get('/factura', [FacturaController::class, "gen_factura"]);
Route::get('/membretada', [MembretadaController::class, 'gen_membretada']);
Route::get('/credencial', [CredencialController::class, 'gen_credencial']);
Route::view('/pdf_form', 'manipulatepdf.pdf_basesixtyfour');
Route::post('/pdf2base64', [ManipulateController::class, 'pdf2base64']);
Route::get("/reporte", [ReporteController::class, "reporte"]);