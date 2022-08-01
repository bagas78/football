<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Team;
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
        $penanggung = $request->penanggung;
        $logo = $request->file('logo');
        $tmp = $_FILES['logo']['tmp_name'];
        $path = 'img/team/';

        //type
        $ex = explode(".", $logo->getClientOriginalName());
        $format = end($ex);

        //filter
        $fil = ['jpg','gif','png','jpeg'];

        if (in_array($format, $fil)) {
            
            $new_name = md5(date('Y-m-d').time()).'.'.$format;
            $logo->move($path, $new_name);

            //upload
            if ($logo) {

                //save database
                $team = new Team;
                $team->team_name = $name;
                $team->team_penanggung = $penanggung;
                $team->team_logo = $new_name;
                $team->save();

                $ses = ['success' => 'Data berhasil di simpan'];
            }else{
                $ses = ['fail' => 'Data gagal di simpan'];
            }

        } else {
            // no upload
            $ses = ['fail' => 'Format file tidak di dukung'];
        }

        return redirect('team')->with($ses);
    }
    public function delete($id){
        $update = Team::where('team_id', $id)->update(['team_delete' => 1]);

        if ($update > 0) {
            $ses = ['success' => 'Data berhasil di simpan'];
        } else {
            $ses = ['fail' => 'Data gagal di simpan'];
        }

        return redirect('team')->with($ses);
        
    }
    public function update(Request $request){

        //variable
        $name = $request->name;
        $penanggung = $request->penanggung;
        $id = $request->id;

        if (@$logo) {
            // logo

            $logo = $request->file('logo');
            $path = 'img/team/';

            //type
            $ex = explode(".", $logo->getClientOriginalName());
            $format = end($ex);

            //filter
            $fil = ['jpg','gif','png','jpeg'];
        
            if (in_array($format, $fil)) {
                
                $db = Team::where('team_id', $id)->first();
                $new_name = $db->team_logo;
                $logo->move($path, $new_name);

                //upload
                if ($logo) {

                    $set = [
                            'team_name' => $name,
                            'team_penanggung' => $penanggung,
                            'team_logo' => $new_name,
                            ];

                    //save database
                    Team::where('team_id', $id)->update($set);

                    $ses = ['success' => 'Data berhasil di simpan'];
                }else{
                    $ses = ['fail' => 'Data gagal di simpan'];
                }

            } else {
                // no upload
                $ses = ['fail' => 'Format file tidak di dukung'];
            }

        } else {
            // no logo
            $update = Team::where('team_id', $id)->update(['team_name' => $name, 'team_penanggung' => $penanggung]);
            if ($update > 0) {
                $ses = ['success' => 'Data berhasil di simpan'];
            } else {
                $ses = ['fail' => 'Data gagal di simpan'];
            }
        }
        
        return redirect('team')->with($ses);
    }
}
