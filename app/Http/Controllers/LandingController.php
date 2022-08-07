<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Musim;
use DB;

class LandingController extends Controller
{
    public function index(){

        $data['jadwal_data'] = DB::select("SELECT * FROM jadwal AS a JOIN musim AS b ON a.jadwal_musim = b.musim_id WHERE a.jadwal_status = 0 ORDER BY a.jadwal_pekan + 0 ASC LIMIT 8");

        $data['hasil_data'] = DB::select("SELECT * FROM jadwal AS a JOIN musim AS b ON a.jadwal_musim = b.musim_id WHERE a.jadwal_status = 1 ORDER BY a.jadwal_pekan + 0 ASC LIMIT 8");

        $data['team_data'] =  DB::select("SELECT b.team_name as tim,COUNT(a.skor_team) AS p, COUNT(IF(a.skor_poin = 3, 1, NULL)) AS m, COUNT(IF(a.skor_poin = 1, 1, NULL)) AS s, COUNT(IF(a.skor_poin = 0, 1, NULL)) AS k, SUM(a.skor_nilai) AS gm, SUM(a.skor_bobol) AS ga, SUM(a.skor_poin) AS poin FROM skor AS a JOIN team AS b ON a.skor_team = b.team_id WHERE a.skor_delete = 0 GROUP BY a.skor_team ORDER BY m DESC LIMIT 5");

        return view('landing/index',$data);
    }
    public function jadwal(Request $request){

         if (@$musim) {

            $data['jadwal_data'] = DB::select("SELECT * FROM jadwal AS a JOIN musim AS b ON a.jadwal_musim = b.musim_id WHERE a.jadwal_status = 0 AND a.jadwal_musim = $musim ORDER BY a.jadwal_pekan + 0 ASC");

        } else {

            $data['jadwal_data'] = DB::select("SELECT * FROM jadwal AS a JOIN musim AS b ON a.jadwal_musim = b.musim_id WHERE a.jadwal_status = 0 ORDER BY a.jadwal_pekan + 0 ASC");
        }

        $data['musim_data'] = Musim::where('musim_delete',0)->orderBy('musim_id', 'DESC')->get();

        return view('landing/jadwal',$data);
    }
    public function hasil(Request $request){

        $musim = $request->musim;

        if (@$musim) {

            $data['hasil_data'] = DB::select("SELECT * FROM jadwal AS a JOIN musim AS b ON a.jadwal_musim = b.musim_id WHERE a.jadwal_status = 1 AND a.jadwal_musim = $musim ORDER BY a.jadwal_pekan + 0 ASC");

        } else {

            $data['hasil_data'] = DB::select("SELECT * FROM jadwal AS a JOIN musim AS b ON a.jadwal_musim = b.musim_id WHERE a.jadwal_status = 1 ORDER BY a.jadwal_pekan + 0 ASC");
        }

        $data['musim_data'] = Musim::where('musim_delete',0)->orderBy('musim_id', 'DESC')->get();
        return view('landing/hasil',$data);
    }
    public function klasemen(Request $request){

        $musim = $request->musim;

        if (@$musim) {
            
            $data['team_data'] =  DB::select("SELECT b.team_name as tim,COUNT(a.skor_team) AS p, COUNT(IF(a.skor_poin = 3, 1, NULL)) AS m, COUNT(IF(a.skor_poin = 1, 1, NULL)) AS s, COUNT(IF(a.skor_poin = 0, 1, NULL)) AS k, SUM(a.skor_nilai) AS gm, SUM(a.skor_bobol) AS ga, SUM(a.skor_poin) AS poin FROM skor AS a JOIN team AS b ON a.skor_team = b.team_id WHERE a.skor_musim = $musim AND a.skor_delete = 0 GROUP BY a.skor_team ORDER BY m DESC");
        } else {
            
            $data['team_data'] =  DB::select("SELECT b.team_name as tim,COUNT(a.skor_team) AS p, COUNT(IF(a.skor_poin = 3, 1, NULL)) AS m, COUNT(IF(a.skor_poin = 1, 1, NULL)) AS s, COUNT(IF(a.skor_poin = 0, 1, NULL)) AS k, SUM(a.skor_nilai) AS gm, SUM(a.skor_bobol) AS ga, SUM(a.skor_poin) AS poin FROM skor AS a JOIN team AS b ON a.skor_team = b.team_id WHERE a.skor_delete = 0 GROUP BY a.skor_team ORDER BY m DESC");
        }

        $data['musim_data'] = Musim::where('musim_delete',0)->orderBy('musim_id', 'DESC')->get();

        return view('landing/klasemen',$data);
    }
    public function histori(Request $request){

        $musim = $request->musim;

        if (@$musim) {
            
            $data['team_data'] =  DB::select("SELECT b.team_name as tim,COUNT(a.skor_team) AS p, COUNT(IF(a.skor_poin = 3, 1, NULL)) AS m, COUNT(IF(a.skor_poin = 1, 1, NULL)) AS s, COUNT(IF(a.skor_poin = 0, 1, NULL)) AS k, SUM(a.skor_nilai) AS gm, SUM(a.skor_bobol) AS ga, SUM(a.skor_poin) AS poin FROM skor AS a JOIN team AS b ON a.skor_team = b.team_id WHERE a.skor_musim = $musim AND a.skor_delete = 1 GROUP BY a.skor_team ORDER BY m DESC");
        } else {
            
            $data['team_data'] =  DB::select("SELECT b.team_name as tim,COUNT(a.skor_team) AS p, COUNT(IF(a.skor_poin = 3, 1, NULL)) AS m, COUNT(IF(a.skor_poin = 1, 1, NULL)) AS s, COUNT(IF(a.skor_poin = 0, 1, NULL)) AS k, SUM(a.skor_nilai) AS gm, SUM(a.skor_bobol) AS ga, SUM(a.skor_poin) AS poin FROM skor AS a JOIN team AS b ON a.skor_team = b.team_id WHERE a.skor_delete = 1 GROUP BY a.skor_team ORDER BY m DESC");
        }

        $data['musim_data'] = Musim::where('musim_delete',0)->orderBy('musim_id', 'DESC')->get();

        return view('landing/histori',$data);
    }
}
