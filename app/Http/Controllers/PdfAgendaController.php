<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use PDF;

class PdfAgendaController extends Controller
{
    public function geraPdf (){
        $agenda = Agenda::all();

        $pdfAgenda = PDF::loadView('pdfAgenda', compact ('agenda'));

        return $pdfAgenda->setPaper('a4')->stream('agendabanhos.pdf');
    }
}
