<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class DashboardController extends Controller
{
    public function index(){
        if (Session::get('login') == 1) {
            
            $data['title'] = 'Dashboard';
            return view('dashboard/index',$data);

        } else {
            
            return redirect('/login');
        }
    }
}
