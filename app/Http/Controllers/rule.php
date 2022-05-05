<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use Illuminate\Support\Facades\DB;

class rule extends Controller
{
    // function addData(Request $request){
    // $query = DB::table('events')->insert([
    //     'eventname' => $request->input('id'),
    //     'text' => $request->input('editor'),
    // ]);

    // if($query){
    //     return back()->with('success','Data has been inserted successfully.');
    // }else{
    //     return back()->with('fail','Something went wrong.');
    // }
// }
    

    //This function is used to change/update data in "booking stalls" and "event schedule"//
    function addData(Request $request){
        $find = DB::table("events")->select('eventname'==$request->input('id'));
        //dd($find);
        if($find){
            $query = DB::table("events")->where(['eventname', $request->input('id')])->update([
                'text' => $request->input('editor'),
                'file' => $request->input('es'),
            ]);
            if($query){
                return back()->with('success','Updated');
            }
            else{
                return back()->with('fail','Updated Error');
            }
        }
        else{
            $query2 = DB::table("events")->insert([
                    'eventname' => $request->input('id'),
                    'text' => $request->input('editor'),
                    'file' => $request->input('es'),
            ]);
            if($query2){
                return back()->with('success','Inserted');
            }   
            else{
                return back()->with('fail','Insert Error ');
            }
        }
    }
}