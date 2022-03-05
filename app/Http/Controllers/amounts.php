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

    public function peramount(Request $data){
        // $id = $request->input('id');
        $data=DB::table('select * from amounts')->where('id',$data)->update([
            'amount'=>$data->input('amount')
        ]);
        // return view('editamount',['amount'=>$data]);
        return redirect('amount');
    }

    public function changeamount(Request $request){
    //    $data=amount::find("id", $request->input('id'));
    //    $data->eventname->$request->input('name');
    //    $data->amount->$request->input('amount');
    //    $data->save();
    $data=DB::table("amounts")->where("id", $request->input('id'))->update([
        'amount'=>$request->input('amount')
    ]);
        if($data){
            return redirect('amount')->with('success','Data has been updated successfully.');
            // dd($currenturl1);
        }else{
           return redirect('amount')->with('fail','This data is already saved, or some technical issue is occuring.');
            // dd($currenturl);
        }
    }






    // public function changeamount(Request $request){
    //     $users=DB::table("amounts")->where("id", $request->input('id'))->update([
    //         'amount' => $request->input('amount'),
    //     ]);
    //     if($users){
    //     return redirect('amount')->with('success','Data has been updated successfully.');
    //     }
    //     else{
    //     return redirect('amount')->with('fail','This data is already saved, or some technical issue is occuring.');
    //    }
    // }
      
}