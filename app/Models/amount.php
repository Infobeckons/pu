<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amount extends Model
{
    use HasFactory;
    public $fillable = ['amount', 'eventname'];
    public $timestamps=false;
}
