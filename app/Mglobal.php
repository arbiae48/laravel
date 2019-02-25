<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mglobal extends Model
{
    public static function Get_Row_Empty($table){
        $columns = DB::select('show columns from ' . $table);
        foreach($columns as $col){
            $column[$col->Field]="";
        }

        return $column;
    }

    public static function Get_Pengarang($kd_pengarang){    
        $pengarang = DB::table('tb_pengarang')->where('kd_pengarang',$kd_pengarang)->first();
        if($pengarang!=""){
            $nama = $pengarang->nama_pengarang;
        } else {
            $nama = "- Not Set -";
        }

        return $nama;
    }

    public static function Get_Penerbit($kd_penerbit){
        $penerbit = DB::table('tb_penerbit')->where('kd_penerbit',$kd_penerbit)->first();
        if($penerbit!=""){
            $nama = $penerbit->nama_penerbit;
        } else {
            $nama = "- Not Set -";
        }

        return $nama;
    }
    
    public static function Get_Kategori($kd_kategori){
        $kategori = DB::table('tb_kategori')->where('kd_kategori',$kd_kategori)->first();
        if($kategori!=""){
            $nama = $kategori->nama_kategori;
        } else {
            $nama = "- Not Set -";
        }

        return $nama;
    }   
    
    public static function Get_Rak($kd_rak){
        $rak = DB::table('tb_rak')->where('kd_rak',$kd_rak)->first();
        if($rak!=""){
            $nama = $rak->nama_rak;
        } else {
            $nama = "- Not Set -";
        }

        return $nama;
    }    
}
