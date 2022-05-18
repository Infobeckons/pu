<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id=$request->input('id');
        global $name;
        $find = DB::table("header")->where('name',$request->input('id'))->first();
        if($request->hasFile('file')){
            $logoImage = $request->file('file');
            $name = $logoImage->getClientOriginalName();

                if($request->input('editor')==null || $request->file('file')==null){
                    return back()->with('fail','All Fields are required.');
                }
                else{
                    if($find!=null){
                        $query2 = DB::table("header")->where('name', '=', $id)->update([
                        'data' => $request->input('editor'),
                        'file' => $request->file('file')->move('storage\image\homepage',$name),
                        ]);
                        if($query2){
                            return back()->with('success','Data updated successfully.');
                        }
                        else{
                            return back()->with('fail','Data Updating Error ');
                        }
                    }
                    else{
                        $query = DB::table("header")->insert([
                            'name' => $request->input('id'),
                            'data' => $request->input('editor'),
                            'file' => $request->file('file')->move('storage\image\homepage',$name),
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

            if($request->input('header')==null){
                return back()->with('fail','Editor Field is required.');
            }
            else{
                if($find!=null){
                    $query2 = DB::table("header")->where('name', '=', $id)->update([
                    'data' => $request->input('editor'),
                    ]);
                    if($query2){
                        return back()->with('success','Data updated successfully.');
                    }
                    else{
                        return back()->with('fail','Data Updating Error ');
                    }
                }
                else{
                    $query = DB::table("header")->insert([
                        'name' => $request->input('id'),
                        'data' => $request->input('editor'),
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function home_page()
    {

    }
}
