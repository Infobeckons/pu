<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Redirect,Response;
use App\Models\form;
use Laravel\Scout\Searchable;

class transdata extends Controller
{
    use Searchable;
    //Shows every data in forms table
    public function index(){
        return DB::select('select * from forms');
    }
    
    //Fetch Data from forms  table and show on report page in admin panel
    public function showData(Request $request){
        
        $user=form::where([
            'eventname'=>$request->input('eventname'),
            'age-group'=>$request->input('agegroup'),
            'member'=>$request->input('members')])->paginate(2);
        //$users['forms']= form::orderBy('id','desc')->paginate(3);
            $users= $user->appends(request()->except('report'));
            //dd($users);
            //return response()->json(['users', $users]);
            //return view('report')->with('users', $users);
            return view('report',['users'=>$users]); 
            //return view('report', $users);
    }

    //Fetch Data from forms table through search in find page through ID,GroupName or Phone numbers
    public function find(Request $req){ 
        if($req->input('search')==null){
           echo "<script>alert('Sorry, we are not able to fetch your data at the moment.')</script>";				
        };
        $find=DB::table('forms')
            ->where(['PURF_ID'=>$req->input('search')])
            ->orwhere(['phone'=>$req->input('search')])
            ->orwhere(['groupname'=>$req->input('search')])
            ->Paginate(5);
            $find= $find->appends(request()->except('find'));
            return view('find',['users'=>$find]); 
    }
}