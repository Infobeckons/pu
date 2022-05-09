<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\amount;
use App\Models\contact;
use Illuminate\Support\Facades\DB;

class reportcontroller extends Controller
{
    //This function is used for showing the data in admin-panel's sidebar "rules"//

    //This function is used for updating contact form in admin panel//
    public function contactupdate(Request $request){
        $users=DB::table("contacts")->update([
            'contact1' => $request->input('c1'),
            'contact2' => $request->input('c2'),
            'contact3' => $request->input('c3'),
            'email' => $request->input('email'),
            'social' => $request->input('link'),
            'address' => $request->input('add'),
        ]);
        if($users){
            return back()->with('success','Data has been updated successfully.');
        }else{
            return back()->with('fail','This data is already saved, or some technical issue is occuring.');
        }
    }

    //shows contacts in contact fields in contact page
    public function showcontact(){
        $users = DB::select('select * from contacts');
        return view('contact',['user'=>$users]);
    }

    public function showrule(Request $request){
        $id="3";
        $users = DB::table('select * from events')->where('eventname' ,$request->input('id'));
        $user=$users->get();
        return view('dancing',['users'=>$user]);
    }
   
}