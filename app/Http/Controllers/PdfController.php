<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Cachorro;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function geraPdf (){
        $cachorro = Cachorro::all();

        $pdf = PDF::loadView('pdf', compact ('cachorro'));

        return $pdf->setPaper('a4')->stream('cachorros.pdf');
    }
}
