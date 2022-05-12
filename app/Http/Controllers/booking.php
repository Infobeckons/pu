<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stall;
use App\Models\form;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class booking extends Controller
{
    function addData(Request $request)
    {
        //Here, the user can input the details of stalls that is booked by participants or else//
        $image=$request->file('bfs')->getClientOriginalName();
        $query = stall::insert([
            'file' => $request->file('bfs')->move('storage\image\booking',$image),
            'text' => $request->input('text'),
        ]);

        if($query==true){
            return back()->with('success','Data has been inserted successfully.');
        }
        else{
            return back()->with('fail','Something went wrong.');
        }
    }

    function show()
    {
        $data= form::all();
        // return view('list',['members'=>$data]);
        // return $data->toArray();
        // return  Carbon::now();
        return $data;
    }
    
}
