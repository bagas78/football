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
            $data['team_data'] =  Team::where('team_delete', 0)->get();
            $data['musim_data'] =  Musim::where('musim_delete', 0)->get();

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
