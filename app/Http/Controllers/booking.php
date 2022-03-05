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
        $query = DB::table('stalls')->insert([
            'file' => $request->input('bfs'),
            'text' => $request->input('text'),
        ]);

        if($query){
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

    // <tr>
    //     <td>Id</td>
    //     <td>Image</td>
    //     <td>Event</td>
    //     <td>Amount</td>
    //     <td>Gender</td>
    // <tr>
    // @foreach($members as $member)
    // <tr>
    //     <td>{{$member['Id']}}</td>
    //     <td>{{$member['image']}}</td>
    //     <td>{{$member['eventname']}}</td>
    //     <td>{{$member['amount']}}</td>
    //     <td>{{$member['gender']}}</td>   
    // <tr>
    // @endforeach

    // }
    
}
