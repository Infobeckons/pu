<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amount extends Model
{
    use HasFactory;
    public $fillable = ['amount', 'eventname'];
    public $timestamps=false;

    public static function getuserData($id=null){

        $value=DB::table('amounts')->orderBy('Id', 'asc')->get(); 
        return $value;
   
      }
   
      public static function insertData($data){
   
        $value=DB::table('amounts')->where('Id', $data['id'])->get();
        if($value->count() == 0){
          $insertid = DB::table('amounts')->insertGetId($data);
          return $insertid;
        }else{
          return 0;
        }
      }
   
      public static function updateData($id,$data){
         DB::table('amounts')->where('id', $id)->update($data);
      }
   
    //   public static function deleteData($id=0){
    //      DB::table('amounts')->where('Id', '=', $id)->delete();
    //   }
   
}
