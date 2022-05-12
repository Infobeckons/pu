<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\form;
use Softon\Indipay\Facades\Indipay; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;

class formup extends Controller
{
    //Insert data from registeration page to database
     //This is the main submission form where user fills their personal details for registeration//
    protected function addData(Request $request){ 
        $validate = $request->validate([
            'image' => 'required',
            'eventname' => 'required',
            'agegroup' => 'required',
            'amount' => 'required',
            'billing_name' => 'required',
            'fathername' => 'required',
            'dateofbirth' => 'required',
            'age' => 'required',
            'pay' => 'required',
            'billing_address' => 'required',
            'billing_city' => 'required',
            'billing_state' => 'required',
            'billing_email' => 'required',
            'institute' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'declaration' => 'required',
            'date' => 'required'
        ]);
        if($validate==false){
            echo "<script>alert('All fields are required.😊')</script>";
        }

        $id= 'PURF'.mt_rand(000001,999999);
        $PURFID = $id;
        $agegroup = $request->input('agegroup');
        if(isset($agegroup)){
            foreach($agegroup as $value){
                if($value == null){
                    continue;
                }
                else{
                    $age = $value;
                    // break;
                }
            }
        }
        $age==$value;
        // dd($free);
        $query = form::insert([
            'PURF_ID'=>$PURFID,
            'image' => $request->file('image')->move('storage\image', $PURFID.'.png'),
            'eventname' => $request->input('eventname'),
            'age-group' => $age,
            'member' => $request->input('members'),
            'membernum' => $request->input('members1'),
            'groupname' => $request->input('group'),
            'amount' => $request->input('amount'),
            'name' => $request -> input('billing_name'),
            'fname' => $request->input('fathername'),
            'dob' => $request->input('dateofbirth'),
            'age'=> $request->input('age'),
            'payment' => $request->input('pay'),
            'address' => $request->input('billing_address'),
            'city' => $request->input('billing_city'),
            'state' => $request->input('billing_state'),
            'email' => $request->input('billing_email'),
            'institute' => $request->input('institute'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'declaration' => $request->input('declaration'),
            'date' => $request->input('date'),
     ]);
       if($query==true){
            return back()->with('success','Data has been inserted successfully.');
        }
        else{
            return back()->with('fail','Something went wrong.');
        }
  
    }
         
        // $dateOfBirth = $request->input('dateofbirth');
        // $years = Carbon::parse($dateOfBirth)->diff(Carbon::now())->format('%y');
        // $years = Carbon::parse($dateOfBirth)->diff(Carbon::now())->format('%y years, %m months and %d days');
        // // $userage = DB::table('forms')->insert(['age'->$years]);
        // // return view('registeration',['years'=>$age]);


    //Age calculator for laravel using carbon plugin
    public function index(){
        $dateOfBirth = '1989-02-27';
        $years = Carbon::parse($dateOfBirth)->age;
            dd($years);
            // return $years;
    }



    //update the registeration status for website's regerationform
    public function register(Request $request){
        $user=DB::table("files")->where("Id", $request->input('id'))->update([
            'reg_status'=>$request->input('reg')
        ]);
        if($user){
            return back()->with('success','Data has been updated successfully.');
        }
        else{
            return back()->with('fail','This data is already saved, or some technical issue is occuring.');
        }
    }




    //show registeration status 
    public function showreg(){
        $users=DB::select('select * from files');
        return view('registeration',['user'=>$users]);
    }       



    //ccavenue form submission from registeration page
    public function paymentcall(Request $request){
        $parameters = [
            'merchant_id' => $request->input('merchant_id'),
            'currency' =>$request->input('currency'),
            'redirect_url' =>$request->input('redirect_url'),
            'cancel_url' =>$request->input('cancel_url'),
            'language' => $request->input('language'),
            'order_id' =>$request->input('order_id'),
            'amount' => $request->input('amount'),
            'transaction_no' => $request->input('tid'),
            // 'name' => 'Jon Doe',
            // 'email' => 'jon@doe.com'
          ];
          $order = Indipay::prepare($parameters);
          return Indipay::process($order);
    }

    // public function validate(Request $request){
    //     $valid = new validate;
    // }

}
