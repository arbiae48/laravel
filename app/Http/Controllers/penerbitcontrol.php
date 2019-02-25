<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mpenerbit;
use App\Mglobal;

class penerbitcontrol extends Controller
{
    function index(){
        $penerbit=Mpenerbit::all();
        return view('data.data_penerbit',compact('penerbit'));
    }

    function add(){
        $penerbit=Mglobal::Get_Row_Empty('tb_penerbit');
        return view('form.frm_penerbit',compact('penerbit'));
    }

    function edit($id){
        
        $penerbit=Mpenerbit::where("kd_penerbit",$id)->first();
        return view('form.frm_penerbit',compact('penerbit'));
    }
    function save(Request $req){

      
        if($req->get('kd_penerbit')==""){
        
       
       

        // Simpan ke Tabel penerbit
        $penerbit = new Mpenerbit([
            
            'nama_penerbit' => $req->get('nama'),
            

        ]);
        $penerbit->save();
        }else{
            $penerbit=Mpenerbit::where("kd_penerbit",$req->get('kd_penerbit'));
            $penerbit->update([
                'nama_penerbit' => $req->get('nama'),
               
            ]);
        }
        return redirect('Penerbit');
    }

    function delete($id){
        $penerbit = Mpenerbit::where("kd_penerbit",$id);
        $penerbit->delete();
        return redirect('Penerbit');
    }
}


