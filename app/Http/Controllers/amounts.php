<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\amount;
use Illuminate\Support\Facades\DB;

class amounts extends Controller
{
    //fetch amount from database through ajax on registeration page
    public function setamount(Request $request){
        //$input_id = DB::table("amounts")->select('eventname')->exists();
        $input_id = amount::findOrFail($request->id);
        print_r($input_id->amount); 
    }

    public function show(Request $request){
        $events = DB::table('amounts')->get();
        return view('amount',['event'=>$events]);
    }


    public function peramount(Request $request){  
            $datas=DB::table('amounts')->where(['Id'=>$request->input('id')])->update([
                'amount'=>$request->input('amount')
            ]);
            //dd($datas);
            if($datas){
                return back()->with('success','Data updated successfully.');
            }   
            else{
                return back()->with('fail','Value Already Exists.');
            }
    }

}