<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amount extends Model
{
    use HasFactory;
    public $fillable = ['amount', 'eventname', 'eventId'];
    public $timestamps=false;
   
      public static function updateData($id,$data){
         DB::table('amounts')->where('id', $id)->update($data);
      }
   
}
