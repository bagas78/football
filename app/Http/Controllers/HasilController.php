<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Jadwal;
use App\Models\Musim;
use App\Models\Current;
use App\Models\Skor;
use Hash;
use Session;
use DB;

class HasilController extends Controller
{
    public function index(){
        
        if (Session::get('login') == 1) {
            
            $data['title'] = 'Jadwal Pertandingan';
            $data['musim_data'] = Musim::where('musim_delete',0)->orderBy('musim_id', 'DESC')->get();
            $data['pekan_data'] = DB::select("SELECT CAST(jadwal_pekan AS INT) AS pekan FROM jadwal GROUP BY pekan ASC");

            $data['data'] = Jadwal::join('musim', 'musim.musim_id', '=', 'jadwal.jadwal_musim')->where('jadwal_delete', 0)->where('jadwal_pekan',1)->orderBy('jadwal_status','ASC')->get();

            return view('hasil/index',$data);

        } else { 
            
            return redirect('/login'); 
        }
        
    }
}
