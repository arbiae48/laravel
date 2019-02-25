<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Mpengarang;
use App\Mglobal;

class pengarangcontrol extends Controller
{
    function index(){
        $pengarang=Mpengarang::all();
        return view('data.data_pengarang',compact('pengarang'));
    }
    function add(){
        $pengarang=Mglobal::Get_Row_Empty('tb_pengarang');
        return view('form.frm_pengarang',compact('pengarang'));
    }

    function edit($id){
        
        $pengarang=Mpengarang::where("kd_pengarang",$id)->first();
        return view('form.frm_pengarang',compact('pengarang'));
    }
    function save(Request $req){

      
        if($req->get('kd_pengarang')==""){
        
       
       

        // Simpan ke Tabel pengarang
        $pengarang = new Mpengarang([
            
            'nama_pengarang' => $req->get('nama'),
            

        ]);
        $pengarang->save();
        }else{
            $pengarang=Mpengarang::where("kd_pengarang",$req->get('kd_pengarang'));
            $pengarang->update([
                'nama_pengarang' => $req->get('nama'),
               
            ]);
        }
        
        return redirect('Pengarang');
    }

    function delete($id){
        $pengarang = Mpengarang::where("kd_pengarang",$id);
        $pengarang->delete();
       
        return redirect('Pengarang');
    }

}
