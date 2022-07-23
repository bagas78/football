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
            
            $data['title'] = 'Musim';
            $data['data'] =  Musim::select('musim_id','musim_tahun')->orderBy('musim_id', 'DESC')->where('musim_delete', 0)->get();

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
            
            if($musim->save()){
                $ses = ['success' => 'Data saved successfully'];
            } else {
                $ses = ['fail' => 'Data failed to save'];
            }
        } else {
            // exist
            $ses = ['fail' => 'Data already exist'];
        }

        return redirect('musim')->with($ses);
    }
    public function delete($id){
        $update = Musim::where('musim_id', $id)->update(['musim_delete' => 1]);

        if ($update > 0) {
            $ses = ['success' => 'Data saved successfully'];
        } else {
            $ses = ['fail' => 'Data failed to save'];
        }

        return redirect('musim')->with($ses);
        
    }
    public function update(Request $request){

        //variable
        $tahun = $request->awal.'-'.$request->akhir;
        $id = $request->id;

        //cek musim exist
        $x = Musim::where('musim_tahun',$tahun)->where('musim_id','!=',$id)->count();

        if ($x == 0) {
            
            $arr = [
                        'musim_tahun' => $tahun
                    ];
          

            $update = Musim::where('musim_id', $id)->update($arr);
            
            if($update > 0){
                $ses = ['success' => 'Data saved successfully'];
            } else {
                $ses = ['fail' => 'Data failed to save'];
            }
        } else {
            // exist
            $ses = ['fail' => 'Data already exist'];
        }

        return redirect('musim')->with($ses);
    }
}
