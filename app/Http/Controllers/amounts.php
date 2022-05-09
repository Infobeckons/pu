<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\amount;
use Illuminate\Support\Facades\DB;

class amounts extends Controller
{
    //fetch amount from database through ajax on registeration page
    public function setamount(Request $request){
    $input_id = amount::findOrFail($request->id);
    print_r($input_id->amount); 

    }
    public function show(Request $request){
        $events = DB::table('amounts')->get();
        return view('amount',['event'=>$events]);
    }

    public function peramount(Request $id){  
        //$id = $request->input('id');
        dd($id);
        $datas=DB::table('amounts')->where(['id'=>$request->Id])->insert([
            'amount'=>$request->input('amount', 1000)
        ]);
        dd($datas);
        // return view('editamount',['amount'=>$data]);
        return redirect('amount')->with('success','Data has been updated successfully.');
    }

    public function changeamount(Request $request){
    //    $data=amount::find("id", $request->input('id'));
    //    $data->eventname->$request->input('id');
    //    $data->amount->$request->input('amount');
    //    dd($data);
    //    $data->save();
    
    $data=DB::table("amounts")->where('id', $request->input('id'))->update([
        'amount'=>$request->input('amount')
    ]);
    //dd($data);
        if($data){
            return redirect('amount')->with('success','Data has been updated successfully.');
            // dd($currenturl1);
        }else{
           return redirect('amount')->with('fail','This data is already saved, or some technical issue is occuring.');
            // dd($currenturl);
        }
     }
}