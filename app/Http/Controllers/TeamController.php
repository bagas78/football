<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Musim;
use Hash;
use Session;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function index()
    {
        if (Session::get('login') == 1) {
            
            $data['title'] = 'Tim';
            $data['data'] =  Team::where('team_delete', 0)->orderBy('team_id', 'DESC')->get();

            return view('team/index',$data);

        } else {
            
            return redirect('/login');
        }
    }
    public function insert(Request $request){

        //variable
        $name = $request->name;
        $logo = $request->file('logo');
        $penanggung = $request->penanggung;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'penanggung' => 'required',
            'logo' => 'image'
        ]);

        if ($validator->fails()) {

            $ses = ['fail' => 'Data gagal di simpan'];
        
        }else{

            if ($logo) {

                //type
                $ex = explode(".", $logo->getClientOriginalName());
                $format = end($ex);
                $new_name = md5(date('Y-m-d').time()).'.'.$format;

                //upload
                $logo->move('img/team', $new_name);

                //save database
                $team = new Team;
                $team->team_name = $name;
                $team->team_penanggung = $penanggung;
                $team->team_logo = $new_name;
                $team->save();

            } else {
                
                //save database
                $team = new Team;
                $team->team_name = $name;
                $team->team_penanggung = $penanggung;
                $team->team_logo = '';
                $team->save();
            }

            $ses = ['success' => 'Data berhasil di simpan'];
        }

        return redirect('team')->with($ses);
    }
    public function delete($id){

        $cek = Musim::where('musim_status','=',1)->count();

        if ($cek == 0) {

            $update = Team::where('team_id', $id)->update(['team_delete' => 1]);

            if ($update > 0) {
                $ses = ['success' => 'Data berhasil di simpan'];
            } else {
                $ses = ['fail' => 'Data gagal di simpan'];
            }

        } else {
            
            $ses = ['fail' => 'Ada musim yang aktif'];
        }

        return redirect('team')->with($ses);
        
    }
    public function update(Request $request){

        //variable
        $name = $request->name;
        $logo = $request->file('logo');
        $penanggung = $request->penanggung;
        $id = $request->id;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'penanggung' => 'required',
            'logo' => 'image'
        ]);

        if ($validator->fails()) {

            $ses = ['fail' => 'Data gagal di simpan'];
        
        }else{

            if ($logo) {

                //type
                $ex = explode(".", $logo->getClientOriginalName());
                $format = end($ex);
                $new_name = md5(date('Y-m-d').time()).'.'.$format;

                //upload
                $logo->move('img/team', $new_name);

                //save database
                $set = [
                        'team_name' => $name,
                        'team_penanggung' => $penanggung,
                        'team_logo' => $new_name,
                        ];

                //save database
                Team::where('team_id', $id)->update($set);

            } else {
                
                //save database
                $set = [
                        'team_name' => $name,
                        'team_penanggung' => $penanggung,
                        ];

                //save database
                Team::where('team_id', $id)->update($set);
            }

            $ses = ['success' => 'Data berhasil di simpan'];
        }

        return redirect('team')->with($ses);
    }
}
