<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dompdf_gen;

Route::get('/', function () {return view('welcome'); });
Route::get('/dompdf',  [Dompdf_gen::class, "genera_dompdf"] );