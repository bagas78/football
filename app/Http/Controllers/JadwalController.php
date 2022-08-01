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

class JadwalController extends Controller
{
    public function index(){
        
        if (Session::get('login') == 1) {
            
            $data['title'] = 'Jadwal Pertandingan';
            $data['musim_data'] = Musim::where('musim_delete',0)->orderBy('musim_id', 'DESC')->get();
            $data['pekan_data'] = DB::select("SELECT CAST(jadwal_pekan AS INT) AS pekan FROM jadwal GROUP BY pekan ASC");

            $data['data'] = Jadwal::join('musim', 'musim.musim_id', '=', 'jadwal.jadwal_musim')->where('jadwal_delete', 0)->where('jadwal_pekan',1)->orderBy('jadwal_status','ASC')->get();

            return view('jadwal/index',$data);

        } else { 
            
            return redirect('/login'); 
        }
        
    }
    public function insert(Request $request){

        //delete table
        DB::table('current')->delete();  
        DB::table('jadwal')->delete();  

        $team = Team::where('team_delete', 0)->get();
        $jadwal = Jadwal::where('jadwal_delete', 0)->get();
        $musim = $request->musim;

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
                
                $left = $key1->team_id.','.$key2->team_id;
                $right = $key2->team_id.','.$key1->team_id;

                if ($key1->team_id == $key2->team_id) {
                    
                    $position = $left;
                } else {
                    
                    $position = $right;
                }

                $cek = Jadwal::where('jadwal_musim', $musim)->where('jadwal_team', $left)->orWhere('jadwal_team', $right)->count();

                if ($cek == 0 && $key1->team_id != $key2->team_id) {

                   if ($no <= $r) {   

                        $jadwal = new Jadwal;
                        $jadwal->jadwal_team = $position;
                        $jadwal->jadwal_pekan = '';
                        $jadwal->jadwal_pertandingan = '';
                        $jadwal->jadwal_musim = $request->musim;
                        $jadwal->save();

                        $no++;

                        if ($no == $r) {
                            
                            $go = 1;
                        }
                   } 

                }
            }           
        }

        if (@$go == 1) {

            $second = 1;

            reloop:

            for ($x=1; $x < $i+1; $x++) { 

                foreach ($team->shuffle() as $t) {

                    $t_id = $t['team_id'];
                    $cek = DB::select("SELECT * FROM jadwal WHERE jadwal_delete = 0 AND jadwal_pekan = '' AND concat(',',jadwal_team,',') LIKE '%,$t_id,%' LIMIT 1");

                    foreach ($cek as $c) {

                        $cur = Current::where('current_pekan', $x)->get();

                        //save current
                        if ($cur->count() == 0) {
                            // insert
                            $current = new Current;
                            $current->current_pekan = $x;
                            $current->current_arr = $c->jadwal_team;
                            $current->save();

                        } else {
                            // update
                            foreach ($cur as $cu) {
                                
                                $uniq = array_unique(array_merge(explode(',', $cu->current_arr),explode(',', $c->jadwal_team)));

                                $update = Current::where('current_pekan', $x)->update(['current_arr'=> implode(',', $uniq)]);
                            }
                        }

                        $m = explode(',', $c->jadwal_team);
                        $n = explode(',', @$cur[0]->current_arr);

                        $num = 0;
                        foreach ($m as $key => $value) {
                           $num += in_array($value, $n);
                        }

                        if ($num == 0) {
                            
                            $j_id = $c->jadwal_id;
                            
                            if (Jadwal::where('jadwal_pekan', $x)->count() < $p) {

                                //tanggal
                                $day = $x * 7;
                                $date = $request->tanggal;
                                $date = strtotime($date);
                                $date = strtotime("+{$day} day", $date);
                                $final_date = date('Y-m-d', $date);

                                $update = Jadwal::where('jadwal_id', $j_id)->update(['jadwal_pekan' => $x, 'jadwal_pertandingan' => $final_date]);
                            }
                        }
                        
                    }

                }  

                //hapus belum di pakai
                $cr = '';
                foreach (Jadwal::where('jadwal_pekan',$x)->get() as $key) {
                    if ($x == $key->jadwal_pekan) {
                        
                        $cr .= $key->jadwal_team.' ';
                    }
                }    

               $arr_jad = explode(',', substr(str_replace(' ', ',', $cr), 0, -1));      

               foreach (Current::where('current_pekan',$x)->get() as $cc) {
                   
                   if ($cc->current_pekan == $x) {
                        
                        $ls = array_diff(explode(',', $cc->current_arr), $arr_jad);
                        $final = implode(',', array_diff(explode(',', $cc->current_arr), $ls));

                        $update = Current::where('current_pekan', $x)->update(['current_arr' => $final]);
                   }
               }
            }


           $second++;

           //eksekusi 30x
           if ($second != 30) {

                goto reloop;

           } else {

                if (Jadwal::where('jadwal_pekan','')->count() > 0) {
                    
                    //ada yang kosong
                    $xx = DB::select("SELECT jadwal_pekan AS pekan,COUNT(jadwal_pekan) AS jum FROM jadwal WHERE jadwal_pekan != '' GROUP BY jadwal_pekan");

                    foreach ($xx as $key) {
                        
                        if ($key->jum <= $p) {
                            
                            for ($i=0; $i < $p - $key->jum; $i++) { 

                                //tanggal
                                $day = $key->pekan * 7;
                                $date = $request->tanggal;
                                $date = strtotime($date);
                                $date = strtotime("+{$day} day", $date);
                                $final_date = date('Y-m-d', $date);
                                
                                Jadwal::where('jadwal_pekan', '')->take(1)->update(['jadwal_pekan' => $key->pekan, 'jadwal_pertandingan' => $final_date]); 
                            }
                        }
                    }

                } 
           }

        }


        if (Jadwal::where('jadwal_pekan','')->count() > 0) {
            
            $ses = ['fail' => 'Data ada yang gagal di simpan'];
        } else {
            
            $ses = ['success' => 'Data berhasil di simpan'];
        }
        

        return redirect('jadwal')->with($ses);

    }

    public function delete($id){
        $update = Jadwal::where('jadwal_id', $id)->update(['jadwal_delete' => 1]);

        if ($update > 0) {
            $ses = ['success' => 'Data berhasil di simpan'];
        } else {
            $ses = ['fail' => 'Data gagal di simpan'];
        }

        return redirect('jadwal')->with($ses);
        
    }
    public function skor(Request $request){
        
        $jadwal = $request->jadwal;
        $skor_a = $request->skor_a;
        $skor_b = $request->skor_b;

        //menang - seri - kalah

        if ($skor_a > $skor_b) {
            // menang a
            $poin_a = 3;
        }else{
            // kalah a
            $poin_a = 0;
        }

        if ($skor_b > $skor_a) {
            // menang b
            $poin_b = 3;
        }else{
            // kalah a
            $poin_b = 0;
        }

        if ($skor_b == $skor_a) {
            //seri
            $poin_a = 1;
            $poin_b = 1;
        }

        //team a
        $a = new Skor;
        $a->skor_jadwal = $jadwal;
        $a->skor_team = $request->team_a;
        $a->skor_nilai = $skor_a;
        $a->skor_poin = $poin_a;
        $a->skor_bobol = $skor_b;
        $a->save();

        //team b
        $b = new Skor;
        $b->skor_jadwal = $jadwal;
        $b->skor_team = $request->team_b;
        $b->skor_nilai = $skor_b;
        $b->skor_poin = $poin_b;
        $b->skor_bobol = $skor_a;
        $b->save();

        //ubah status
        $update = Jadwal::where('jadwal_id', $jadwal)->update(['jadwal_status' => 1]);

        if ($update > 0) {
            $ses = ['success' => 'Data berhasil di simpan'];
        } else {
            $ses = ['fail' => 'Data gagal di simpan'];
        }

        return redirect('jadwal')->with($ses);
    }
}
