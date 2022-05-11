<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\View;

class ViewController extends Controller
{
    public function show(View $visitor){
        //dd($view);
        $expiresAt = now()->addHours(24);
        views($visitor)->cooldown($expiresAt)->record();
        //views($view)->record();
        //dd($total);
        return view('include.header', compact('visitor'));
    }
}
