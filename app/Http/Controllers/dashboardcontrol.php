<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BukuReq;
use Illuminate\Support\Facades\DB;
use App\Mglobal;
use App\Manggota;
use App\Mbuku;
class dashcontrol extends Controller
{
    public function index(){
        $buku = DB::select('SELECT count(*) as jumlah from tb_buku ');
        $jumlahbuku = $buku[0]->jumlah;
        $anggota = DB::select('SELECT count(*) as jumlah from tb_anggota');
        $jumlahanggota= $anggota[0]->jumlah;
        return view('dashboard',compact('jumlahbuku','jumlahanggota'));
        
    }
    function tampil(){
        $anggota=Manggota::all();
        return view('dashboard',compact('anggota'));
    }
}