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

class KlasemenController extends Controller
{
    public function index(Request $request)
    {
        if (Session::get('login') == 1) {
            
            $data['title'] = 'Klasemen';
            $data['musim_data'] =  Musim::where('musim_delete', 0)->get();

            $data['team_data'] =  DB::select("SELECT b.team_name as tim,COUNT(a.skor_team) AS p, COUNT(IF(a.skor_poin = 3, 1, NULL)) AS m, COUNT(IF(a.skor_poin = 1, 1, NULL)) AS s, COUNT(IF(a.skor_poin = 0, 1, NULL)) AS k, SUM(a.skor_nilai) AS gm, SUM(a.skor_bobol) AS ga, SUM(a.skor_poin) AS poin FROM skor AS a JOIN team AS b ON a.skor_team = b.team_id WHERE a.skor_delete = 0 GROUP BY a.skor_team ORDER BY m DESC");

            $musim = @$request->musim;

            if (@$musim) {
                $data['musim_id'] = $request->musim;
            } else {
                $data['musim_id'] = 1;
            }

            return view('klasemen/index',$data);

        } else {
            
            return redirect('/login');
        }
    }
}
