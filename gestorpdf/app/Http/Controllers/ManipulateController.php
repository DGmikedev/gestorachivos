<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Clases\Pdf2data;


class ManipulateController extends Controller
{

    /**
     *  en el request ocupa 
     *  $request->file('pdf')
     */
    public function pdf2base64(Request $request){


        $b64 = Pdf2data::pdf_a_base64($request->file('pdf'));

    // para imagen  =====>>>>>>>  $file = "data:image/png;base64,".base64_encode(file_get_contents($request->file('image')));

        return response()->json(['cadena64' => $b64]);

    }
    
}
