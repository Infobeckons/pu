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
            // $data= $request->input();
            $request->session()->put('email', $request->input('email'));
            // dd($_SESSION);
            return $request->session->get('email');
            // return view('dashboard');
            
        }
        elseif($role=='0'){
            $request->session()->put('email', $request->input('email'));
            return view('report');
        }
        else{
            $_SESSION = session()->all();
            return view('report');
        }
    }

    // public function logout(Request $request){
    //     $_SESSION=$request->session()->forget('user');
    //     if($_SESSION==true){
    //         return view('/');
    //     }
    //     else{
    //         return view('find');
    //     }
    // }
}
