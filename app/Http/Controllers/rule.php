<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use Illuminate\Support\Facades\DB;

class rule extends Controller
{
    //This function is used to change/update data in "event schedule"//
    function addData(Request $request){
        $id=$request->input('id');
        global $name;
        $find = DB::table("events")->where('eventname',$request->input('id'))->first();
        if($request->hasFile('es')){
            $logoImage = $request->file('es');
            $name = $logoImage->getClientOriginalName();

                if($request->input('editor')==null || $request->file('es')==null){
                    return back()->with('fail','All Fields are required.');
                }
                else{
                    if($find!=null){
                        $query2 = DB::table("events")->where('eventname', '=', $id)->update([
                        'text' => $request->input('editor'),
                        'file' => $request->file('es')->move('storage\image\event',$name),
                        ]);
                        if($query2){
                            return back()->with('success','Data updated successfully.');
                        }   
                        else{
                            return back()->with('fail','Data Updating Error ');
                        }
                    }
                    else{
                        $query = DB::table("events")->insert([
                            'eventname' => $request->input('id'),
                            'text' => $request->input('editor'),
                            'file' => $request->file('es')->move('storage\image\event',$name),
                        ]);

                        if($query){
                            return back()->with('success','Data has been inserted successfully.');
                        }
                        else{
                            return back()->with('fail','Something went wrong.');
                        }
                    }
                }
        }
        else{

            if($request->input('editor')==null){
                return back()->with('fail','Editor Field is required.');
            }
            else{
                if($find!=null){
                    $query2 = DB::table("events")->where('eventname', '=', $id)->update([
                    'text' => $request->input('editor'),
                    ]);
                    if($query2){
                        return back()->with('success','Data updated successfully.');
                    }   
                    else{
                        return back()->with('fail','Data Updating Error ');
                    }
                }
                else{
                    $query = DB::table("events")->insert([
                        'eventname' => $request->input('id'),
                        'text' => $request->input('editor'),
                    ]);

                    if($query){
                        return back()->with('success','Data has been inserted successfully.');
                    }
                    else{
                        return back()->with('fail','Something went wrong.');
                    }
                }
            }

        }

        
    }
}