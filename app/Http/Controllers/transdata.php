<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App\Models\form;

class transdata extends Controller
{
    //Shows every data in forms table
    public function index(){
        return DB::select('select * from forms');
    }
    
    //Fetch Data from forms  table and show on report page in admin panel
    public function showData(Request $req){
        $users=DB::table('forms')->where([
            'eventname'=>$req->input('eventname'),
            'age-group'=>$req->input('agegroup'),
            'member'=>$req->input('members')])
             ->Paginate(2);
            //dd($users);
            //return response()->json(['users', $users]);
            //return view('report')->with('users', $users);
            //return view('report',['users'=>$users]); 
            return view('report',compact('users'));

    }

    //Fetch Data from forms table through search in find page through ID,GroupName or Phone numbers
    public function find(Request $req){ 
        if($req->input('search')==null){
           echo "<script>alert('No Data Founded.')</script>";				
        };
        $find=DB::table('forms')
            ->where(['PURF_ID'=>$req->input('search')])
            ->orwhere(['phone'=>$req->input('search')])
            ->orwhere(['groupname'=>$req->input('search')])
            ->Paginate(2);
            $find= $find->appends(request()->except('find'));
            return view('find',['users'=>$find]); 
    }
}