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
    public function update(Request $request)
    {
        // dd($request);
        $id=$request->input('id');
        global $name;
        $find = DB::table("headers")->where('id',$request->input('id'))->first();
        if($request->hasFile('file')){
            $logoImage = $request->file('file');
            $name = $logoImage->getClientOriginalName();

                if($request->input('data')==null && $request->file('file')==null){
                    return view('p_home')->with('fail','All Fields are required.');
                }
                else{
                    if($find!=null){
                        $query2 = DB::table("headers")->where('id', '=', $id)->update([
                        'data' => $request->input('data'),
                        'file' => $request->file('file')->move('storage\image\homepage',$name),
                        ]);
                        if($query2){
                            return view('p_home')->with('success','Data updated successfully.');
                        }
                        else{
                            return view('p_home')->with('fail','Data Updating Error ');
                        }
                    }
                    else{
                        $query = DB::table("headers")->insert([
                            'name' => $request->input('name'),
                            'data' => $request->input('data'),
                            'file' => $request->file('file')->move('storage\image\homepage',$name),
                        ]);

                        if($query){
                            return view('p_home')->with('success','Data has been inserted successfully.');
                        }
                        else{
                            return view('p_home')->with('fail','Something went wrong.');
                        }
                    }
                }
        }
        else{

            if($request->input('name')==null){
                return back()->with('fail','Field name error.');
            }
            else{
                if($find!=null){
                    $query2 = DB::table("headers")->where('id', '=', $id)->update([
                    'data' => $request->input('data'),
                    ]);
                    if($query2){
                        return view('p_home')->with('success','Data updated successfully.');
                    }
                    else{
                        return view('p_home')->with('fail','Data Updating Error ');
                    }
                }
                else{
                    $query = DB::table("headers")->insert([
                        'name' => $request->input('name'),
                        'data' => $request->input('data'),
                    ]);

                    if($query){
                        return view('p_home')->with('success','Data has been inserted successfully.');
                    }
                    else{
                        return view('p_home')->with('fail','Something went wrong.');
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


    public function p_home()
    {
        return view('p_home');
    }

    //Home page Update
    public function home_page_update($param,Request $request)
    {

            $users=header::where(['url'=>$param])->get();
            //dd($users);
            return view('home_update',['users'=>$users]);

    }
}
