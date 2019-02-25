<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mrak;
use App\Mglobal;

class rakcontrol extends Controller
{
    function index(){
        $rak=Mrak::all();
        return view('data.data_rak',compact('rak'));
    }

    function add(){
        $rak=Mglobal::Get_Row_Empty('tb_rak');
        return view('form.frm_rak',compact('rak'));
    }

    function edit($id){
        
        $rak=Mrak::where("kd_rak",$id)->first();
        return view('form.frm_rak',compact('rak'));
    }
    function save(Request $req){

      
        if($req->get('kd_rak')==""){
        
       
       

        // Simpan ke Tabel rak
        $rak = new Mrak([
            
            'nama_rak' => $req->get('nama'),
            

        ]);
        $rak->save();
        }else{
            $rak=Mrak::where("kd_rak",$req->get('kd_rak'));
            $rak->update([
                'nama_rak' => $req->get('nama'),
               
            ]);
        }
        return redirect('Rak');
    }

    function delete($id){
        $rak = Mrak::where("kd_rak",$id);
        $rak->delete();
        return redirect('Rak');
    }
}


