<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable ;

class View extends Model implements Viewable
{
    use InteractsWithViews;
    public $fillable = ['viewable_type', 'viewable_id','visitor','collection','viewed_at'];
}
