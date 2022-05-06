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
        $id=$request->input('id');
        $find = event::where('eventname', '=',$id)->first();
        //DB::table("events")->where('eventname',$id)->get();
        //dd($find);
        if(is_null($find)){
            //dd($find);
            $query = DB::table("events")->insert([
                'eventname' => $request->input('id'),
                'text' => $request->input('editor'),
                'file' => $request->input('es'),
            ]);
            //dd($query);
            if($query){
                return back()->with('success','Data has been inserted successfully.');
            }
            else{
                return back()->with('fail','Something went wrong.');
            }
        }
        else{
            //dd($find);
            $query2 = DB::table("events")->update([
                    //'eventname' => $request->input('id'),
                    'text' => $request->input('editor'),
                    'file' => $request->input('es'),
            ]);
            if($query2){
                return back()->with('success','Data updated successfully.');
            }   
            else{
                return back()->with('fail','Data Updating Error ');
            }
        }
    }
}