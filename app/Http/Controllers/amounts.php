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
    public function show(){
        // $amounts =DB::table('amounts')->select()->all();
        // return view('amount',['am'=>$amounts]);
        $users = DB::select('select * from amounts');
        return view('superadmin/amountedit',['user'=>$users]);
    }

    public function peramount(Request $request,$data){  
        //$id = $request->input('id');
        $datas=DB::table('amounts')->where('id', $data->id)->insert([
            'amount'=>$request->input('amount', 10000)
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
    dd($data);
        if($data){
            return redirect('amount')->with('success','Data has been updated successfully.');
            // dd($currenturl1);
        }else{
           return redirect('amount')->with('fail','This data is already saved, or some technical issue is occuring.');
            // dd($currenturl);
        }
     }
}