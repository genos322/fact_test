<?php

namespace App\Http\Controllers;

use PDF;



use App\Models\TVenta;
class PdfController extends Controller
{
    public function actionPdf($idVenta)
    {
        $venta = TVenta::find($idVenta);
        $pdf = PDF::loadView('pdf.ticket', compact('venta'));
        $customPaper = array(0,0,265 , 860.89);
        $pdf->set_paper($customPaper);
        return $pdf->stream('ticket.pdf');
    }
}