<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use Illuminate\Support\Facades\DB;

class rule extends Controller
{
    // function addData(Request $req){
    // $query = DB::table('events')->insert([
    //     'eventname' => $req->input('id'),
    //     'text' => $req->input('editor'),
    // ]);

    // if($query){
    //     return back()->with('success','Data has been inserted successfully.');
    // }else{
    //     return back()->with('fail','Something went wrong.');
    // }
    

    //This function is used to change/update data in "booking stalls" and "event schedule"//
    function addData(Request $req){
        $query = DB::table("events")->where("eventname", $req->input('id'))->update([
            'text' => $req->input('editor'),
            'file' => $req->input('es'),
        ]);
    
        if($query){
            return back()->with('success','Data has been updated successfully.');
        }else{
            return back()->with('fail','This data is already saved, or some technical issue is occuring.');
        }
    }
}