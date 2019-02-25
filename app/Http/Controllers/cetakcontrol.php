<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Manggota;
class cetakcontrol extends Controller
{
    function cetak($id){
        $anggota= Manggota::where("kd_anggota",$id)->first();
        $user=User::all();
        return view('cetak_kartu',compact('anggota','user'));
    }
}