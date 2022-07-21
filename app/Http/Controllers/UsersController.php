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
        $data['title'] = 'User Control';
        $data['data'] =  User::select('user_id','user_name','user_email')->where('user_delete', 0)->get();

        return view('user/index',$data);
    }
    public function insert(Request $request){
        $user = new User;
        $user->user_name = 'Admin';
        $user->user_email = $request->email;
        $user->user_password = bcrypt($request->password);
        
        if($user->save()){
            return redirect('user')->with('success', 'Data saved successfully');
        } else {
            return redirect('user')->with('fail', 'Data failed to save');
        }

        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
    public function delete($id){
        $update = User::where('user_id', $id)->update(['user_delete' => 1]);

        if ($update > 0) {
            return redirect('user')->with('success', 'Data saved successfully');
        } else {
            return redirect('user')->with('fail', 'Data failed to save');
        }
        
    }
    public function update($id){

    }
}
