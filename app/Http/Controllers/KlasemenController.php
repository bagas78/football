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
    public function index()
    {
        if (Session::get('login') == 1) {
            
            $data['title'] = 'Klasemen';
            $data['team_data'] =  Team::where('team_delete', 0)->get();
            $data['musim_data'] =  Musim::where('musim_delete', 0)->get();

            return view('klasemen/index',$data);

        } else {
            
            return redirect('/login');
        }
    }
}
