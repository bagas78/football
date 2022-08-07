<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musim;
use Hash;
use Session;

class MusimController extends Controller
{
    public function index()
    {

        if (Session::get('login') == 1) {
            
            $data['title'] = 'Musim Liga';
            $data['data'] =  Musim::select('musim_id','musim_tahun','musim_status')->orderBy('musim_id', 'DESC')->where('musim_delete', 0)->get();

            return view('musim/index',$data);

        } else {
            
            return redirect('/login'); 
        }
    }
    public function insert(Request $request){

        //variable
        $tahun = $request->awal.'-'.$request->akhir;

        //cek musim exist
        $x = Musim::where('musim_tahun',$tahun)->count();

        if ($x == 0) {
            // null
            $musim = new Musim;
            $musim->musim_tahun = $tahun;
            $musim->musim_status = 0;
            
            if($musim->save()){
                $ses = ['success' => 'Data berhasil di simpan'];
            } else {
                $ses = ['fail' => 'Data gagal di simpan'];
            }
        } else {
            // exist
            $ses = ['fail' => 'Data sudah ada'];
        }

        return redirect('musim')->with($ses);
    }
    public function delete($id){

        $cek = Musim::where('musim_id',$id)->where('musim_status','=',1)->count();

        if ($cek == 0) {

            $update = Musim::where('musim_id', $id)->update(['musim_delete' => 1]);

            if ($update > 0) {
                $ses = ['success' => 'Data berhasil di simpan'];
            } else {
                $ses = ['fail' => 'Data gagal di simpan'];
            }

        } else {
           
           $ses = ['fail' => 'Musim sedang aktif'];
        }

        return redirect('musim')->with($ses);
        
    }
    public function update(Request $request){

        //variable
        $tahun = $request->awal.'-'.$request->akhir;
        $id = $request->id;

        $cek = Musim::where('musim_id',$id)->where('musim_status','=',1)->count();

        if ($cek == 0) {

            //cek musim exist
            $x = Musim::where('musim_tahun',$tahun)->where('musim_id','!=',$id)->count();

            if ($x == 0) {
                
                $arr = [
                            'musim_tahun' => $tahun
                        ];
              

                $update = Musim::where('musim_id', $id)->update($arr);
                
                if($update > 0){
                    $ses = ['success' => 'Data berhasil di simpan'];
                } else {
                    $ses = ['fail' => 'Data gagal di simpan'];
                }
            } else {
                // exist
                $ses = ['fail' => 'Data sudah ada'];
            }
            
        } else {
           
           $ses = ['fail' => 'Musim sedang aktif'];
        }

        return redirect('musim')->with($ses);
    }
    public function switch($id){

        $cek = Musim::where('musim_id',$id)->first();

        if ($cek['musim_status'] == 1) {
            // nonaktif
            $update = Musim::where('musim_id', $id)->update(['musim_status' => 0]);
        } else {
            // aktif
            $update = Musim::where('musim_id', $id)->update(['musim_status' => 1]);
        }

        if ($update > 0) {
            $ses = ['success' => 'Data berhasil di simpan'];
        } else {
            $ses = ['fail' => 'Data gagal di simpan'];
        }

        return redirect('musim')->with($ses);
        
    }
}
