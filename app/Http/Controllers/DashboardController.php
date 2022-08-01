<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Jadwal;
use App\Models\Skor;
use DB;
use Session;
 
class DashboardController extends Controller
{
    public function index(){
        if (Session::get('login') == 1) {
            
            $data['title'] = 'Dashboard';

            $data['team_num'] = Team::where('team_delete', 0)->count();
            $data['pertandingan_num'] = Jadwal::where('jadwal_delete', 0)->count();
            $data['akan_num'] = Jadwal::where('jadwal_delete', 0)->where('jadwal_status', 0)->count();
            $data['selesai_num'] = Jadwal::where('jadwal_delete', 0)->where('jadwal_status', 1)->count();

            $data['data'] = DB::select("SELECT SUM(skor_nilai) AS poin, skor_team as team FROM skor WHERE skor_delete = 0 GROUP BY skor_team ORDER BY poin DESC");

            return view('dashboard/index',$data);

        } else {
            
            return redirect('/login');
        }
    }
}
