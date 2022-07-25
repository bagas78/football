<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Jadwal;
use App\Models\Musim;
use Hash;
use Session;

class JadwalController extends Controller
{
    public function index(){
        
        if (Session::get('login') == 1) {
            
            $data['title'] = 'Jadwal';
            $data['data'] = Jadwal::where('jadwal_delete', 0)->get();
            $data['musim_data'] = Musim::where('musim_delete',0)->orderBy('musim_id', 'DESC')->get();
            return view('jadwal/index',$data);

        } else {
            
            return redirect('/login');
        }
        
    }
    public function insert(Request $request){

        $team = Team::where('team_delete', 0)->get();
        $jadwal = Jadwal::where('jadwal_delete', 0)->get();

        //team
        $a = $team->count();

        //jadwal
        $b = $jadwal->count();

        //jumlah loop
        $r = $a * (($a-1) /2);

        //pembagian
        $i = $a - 1;

        //pekan
        $p = $r / $i;

        $no = 1;
        $arr = array();
        foreach ($team->shuffle() as $key1) {

            foreach ($team->shuffle() as $key2) {
                
                $musim = $request->musim;
                $left = $key1->team_id.','.$key2->team_id;
                $right = $key2->team_id.','.$key1->team_id;

                $cek = Jadwal::where('jadwal_musim', $musim)->where('jadwal_team', $left)->orWhere('jadwal_team', $right)->count();

                if ($cek == 0 && $key1->team_id != $key2->team_id) {

                   if ($no <= $r) {                        

                        $jadwal = new Jadwal;
                        $jadwal->jadwal_team = $left;
                        $jadwal->jadwal_pekan = '';
                        $jadwal->jadwal_pertandingan = '';
                        $jadwal->jadwal_musim = $request->musim;
                        //$jadwal->save();

                        $no++;

                        if ($no == $r) {
                            
                            $go = 1;
                        }
                   } 

                }
            }           
        }

        //if (@$go == 1) {
            
            for ($x=0; $x < $i; $x++) { 
                
                echo $x;
            }
        //}

        //$key1->team_id != $key2['team_id']
        //echo '<pre>';
        //print_r(count($arr));
    }
}
