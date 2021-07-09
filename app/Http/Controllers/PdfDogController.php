<?php

namespace App\Http\Controllers;

use App\Models\Cachorro;
use Illuminate\Http\Request;
use PDF;

class PdfDogController extends Controller
{
    public function geraPdf (){
        $cachorro = Cachorro::all();

        $pdfDog = PDF::loadView('pdfDog', compact ('cachorro'));

        return $pdfDog->setPaper('a4')->stream('cachorros.pdf');
    }
}
