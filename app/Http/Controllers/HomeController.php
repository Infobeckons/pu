<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request){
        $role=Auth::user()->role;
        if($role=='1')
        {
            return view('dashboard');
        }
        elseif($role=='0'){
            return view('report');
        }
        else{
            return view('dashboard');
        }
    }

    public function login(Request $request)
    {
        return  view('auth\login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

}
