<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        $data['title'] = 'Login';
        return view('login',$data);
    }
    public function auth(Request $request)
    {
        //post value
        $email = $request->email;
        $password = $request->password;

        $user = User::where('user_email', $email)->where('user_delete', 0)->first();

        if (@$user) {

            if (Hash::check($password, $user->user_password)) {
                
                //berhasil login
                $sess = array(
                                'login' => 1,
                                'user_name' => $user->user_name,
                                'user_email' => $user->user_email, 
                                'user_level' => $user->user_level, 
                            );

                Session::put($sess);
                //Session::get('user_email')

                return redirect('/dashboard');

            } else {
                
                return redirect('/login')->with('fail', 'Password salah !!');;
            } 

        } else {
            
            return redirect('/login')->with('fail', 'Email tidak terdaftar !!');
        }

    }
    public function logout(){
        Session::flush();
        return redirect('/login');
    }
}
