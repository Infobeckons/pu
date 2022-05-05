<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;
    public $fillable = ['contact1', 'contact2', 'contact3', 'address', 'social', 'email'];
    public $timestamps=false;
}
