<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// https://mpdf.github.io/installation-setup/installation-v7-x.html 
// https://www.simplesoftware.io/docs/simple-qrcode QR COde Library

use Mpdf\Mpdf;
use App\Manggota;
use App\Mkoleksi;

class reportcontrol extends Controller
{
    //

    function rpt_anggota(){
        $anggota = Manggota::all();
        $content = view('report.rpt_anggota',compact('anggota'));

        $pdf = new Mpdf([
            'orientation'=>"L",
            'format'=>"Folio"
        ]);

        $pdf->WriteHTML($content);
        $pdf->Output(public_path().'/Laporan Anggota.pdf','I');
    }

    function rpt_QRCode_Buku(){
        $buku = Mkoleksi::all();

        $content = view('report.rpt_qrcode_buku',compact('buku'));

        $pdf = new Mpdf([
            'orientation'=>"P",
            'format'=>"Folio"
        ]);

        
        $pdf->WriteHTML($content);
        $pdf->Output(public_path().'/Laporan QR Code Buku.pdf','I');
    }
}
