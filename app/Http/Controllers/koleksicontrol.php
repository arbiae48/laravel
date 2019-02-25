<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mglobal;
use App\Mbuku;
use App\Mkategori;
use App\Mkoleksi;
use App\Mrak;

class koleksicontrol extends Controller
{
    //
    function index(){
        $koleksi = DB::select('select tb_koleksi_buku.kd_koleksi,tb_koleksi_buku.no_induk_buku,tb_buku.judul,
        tb_koleksi_buku.tgl_pengadaan,tb_koleksi_buku.akses,tb_rak.nama_rak,tb_koleksi_buku.status
        from tb_koleksi_buku,tb_buku,tb_rak where tb_koleksi_buku.kd_buku = tb_buku.kd_buku and tb_koleksi_buku.kd_rak = tb_rak.kd_rak');
        return view('data.data_koleksi',compact('koleksi'));
    }

    function add(){
        $koleksi = Mglobal::Get_Row_Empty('tb_koleksi_buku');
        $buku = Mbuku::all();
        $rak = Mrak::all();
        return view('form.frm_koleksi',compact('buku','koleksi','rak'));
    }

    function save(Request $req){
        $buku =Mbuku::where('kd_buku',$req->get('kd_buku'))->first();
        $kategori = Mkategori::where('kd_kategori',$buku['kd_kategori'])->first();

        for($i=1;$i<=$req->get('jumlah');$i++){
            // Generate No Induk Buku
            $newid = DB::select('SHOW TABLE STATUS LIKE "tb_koleksi_buku"');
            $kd_buku = sprintf('%04d',$req->get('kd_buku'));
            $no_urut = sprintf('%06d',$newid[0]->Auto_increment);
            $no_induk_buku = "B-".$kd_buku."-".$kategori['singkatan']."-".$no_urut;
        

        //Proses Simpan Ke Dalam Tabel
        $koleksi = new Mkoleksi([
            'no_induk_buku' => $no_induk_buku,
            'kd_buku' => $req->get('kd_buku'),
            'kd_user' => 1,
            'tgl_pengadaan' => date("Y-m-d",strtotime( $req->get('tgl_pengadaan'))),
            'akses' => $req->get('akses'),
            'kd_rak' => $req->get('kd_rak'),
            'sumber' => $req->get('sumber'),
            'status' => $req->get('status'),
        ]);
        $koleksi->save();
       }

        return redirect('koleksi');
    }

   function edit($kd_koleksi){
    $koleksi = Mkoleksi::where("kd_koleksi",$kd_koleksi)->first();
    $buku = Mbuku::all();
    $rak = Mrak::all();
    return view('form.frm_koleksi',compact('koleksi','buku','rak'));

   }

    function delete($kd_koleksi){
        $koleksi = Mkoleksi::where("kd_koleksi",$kd_koleksi);        
        $koleksi->delete();
        return redirect('koleksi');

    }

}