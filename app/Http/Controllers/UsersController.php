<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class UsersController extends Controller
{
    public function index()
    {
        if (Session::get('login') == 1) {
            
            $data['title'] = 'Kontrol Pengguna';
            $data['data'] =  User::select('user_id','user_name','user_email','user_level')->orderBy('user_id', 'DESC')->where('user_delete', 0)->get();

            return view('user/index',$data);

        } else {
            
            return redirect('/login');
        }
    }
    public function insert(Request $request){

        //variable
        $email = $request->email;
        $password = $request->password;
        $name = $request->name;
        $level = $request->level;

        //cek email exist
        $x = User::where('user_email',$email)->count();

        if ($x == 0) {
            // null
            $user = new User;
            $user->user_name = $name;
            $user->user_email = $email;
            $user->user_level = $level;
            $user->user_password = bcrypt($password);
            
            if($user->save()){
                $ses = ['success' => 'Data berhasil di simpan'];
            } else {
                $ses = ['fail' => 'Data gagal di simpan'];
            }
        } else {
            // exist
            $ses = ['fail' => 'Data sudah ada'];
        }

        return redirect('user')->with($ses);
    }
    public function delete($id){
        $update = User::where('user_id', $id)->update(['user_delete' => 1]);

        if ($update > 0) {
            $ses = ['success' => 'Data berhasil di simpan'];
        } else {
            $ses = ['fail' => 'Data gagal di simpan'];
        }

        return redirect('user')->with($ses);
        
    }
    public function update(Request $request){

        //variable
        $email = $request->email;
        $password = $request->password;
        $name = $request->name;
        $id = $request->id;
        $level = $request->level;

        //cek email exist
        $x = User::where('user_email',$email)->where('user_id','!=',$id)->count();

        if ($x == 0) {
            
            if ($password == '') {
                // pass null
                $arr = [
                        'user_name' => $name,
                        'user_email' => $email,
                        'user_level' => $level,
                    ];
            } else {
                // pass fill
                $arr = [
                        'user_name' => $name,
                        'user_email' => $email,
                        'user_level' => $level,
                        'user_password' => bcrypt($password)
                    ];
            }
          

            $update = User::where('user_id', $id)->update($arr);
            
            if($update > 0){
                $ses = ['success' => 'Data berhasil di simpan'];
            } else {
                $ses = ['fail' => 'Data gagal di simpan'];
            }
        } else {
            // exist
            $ses = ['fail' => 'Data sudah ada'];
        }

        return redirect('user')->with($ses);
    }
}
