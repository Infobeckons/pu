<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\booking;
use App\Http\Controllers\reportcontroller;
use App\Http\Controllers\formup;
use App\Http\Controllers\transdata;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//user role checking(Eg. Admin, User, SuperAdmin etc)
Route::get('success', 'App\Http\Controllers\HomeController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('report');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admindashboard', function () {
    return view('dashboard');
})->name('admindashboard');

//Main dashboard Menu
Route::resource('tasks',TaskController::class);
Route::resource('admin',AdminController::class);

Route::get('report', function (){    return view('report');     });
Route::post('report', 'App\Http\Controllers\reportcontroller@show');

Route::get('contact', 'App\Http\Controllers\reportcontroller@showcontact');
Route::post('addcontact', 'App\Http\Controllers\reportcontroller@contactupdate');

Route::get('registeration', 'App\Http\Controllers\formup@showreg');
// Route::get('dancing', 'App\Http\Controllers\reportcontroller@showrule');
// Route::get('regform', 'App\Http\Controllers\formup@showreg');

//session//
// Route::post('user', 'App\Http\Controllers\UserAuth@userLogin');
Route::post('amountfetch', 'App\Http\Controllers\amounts@setamount');
Route::get('amount', 'App\Http\Controllers\amounts@show');
Route::view('amounts' , 'superadmin\amountedit');
Route::post('changeamount', 'App\Http\Controllers\amounts@changeamount');
//Route::post('editamount/changeamount', 'App\Http\Controllers\amounts@changeamount');
Route::get('editamount/{data}', 'App\Http\Controllers\amounts@peramount');

// pages//
Route::resource('editor', 'App\Http\Controllers\CKEditorController');
Route::get('/', function () {   return view('welcome'); });
//Route::get('dashboard', function (){  return view('dashboard');   });
Route::get('find', function (){  return view('find');   });
Route::get('paintingcompitition', function (){   return view('paintingcompitition');    });
Route::get('collarge', function (){  return view('collarge');   });
Route::get('dancing', function (){  return view('dancing'); });
Route::get('booking', function (){   return view('booking');    });
// Route::get('contact', function (){   return view('contact');    });
Route::get('result', function (){   return view('result2021');    });
Route::get('fa_paint', function (){  return view('facepainting');   });
Route::get('fe_dress', function (){ return view('fancydress');  });
Route::get('fc', function (){   return view('fashioncomp');     });
Route::get('pcm', function (){  return view('paintcomp2');  });
Route::get('ptc', function (){  return view('photocomp');  });
Route::get('pr', function (){  return view('poetic');  });
Route::get('rc', function (){  return view('rangoli');  });
Route::get('rp&s', function (){  return view('rp&rps');  });
Route::get('sing', function (){  return view('singing');  });
Route::get('slog', function (){  return view('slogan');  });
Route::get('band', function (){  return view('band');  });
Route::get('cmc', function (){  return view('mehandi');  });
Route::view('acknowledge', 'acknowledge');
// Route::get('registeration', function (){ return view('registeration'); });
// Route::get('regform', function (){   return view('registrationform');   });
Route::get('event', function (){   return view('event');  });
Route::get('p_home', function(){    return view('p_home');  });
Route::get('p_about', function(){    return view('p_about');  });
Route::get('p_event', function(){    return view('p_event');  });
Route::get('p_header', function(){    return view('p_header');  });

//gallery pages//
Route::get('pur-1', function (){   return view('PURF_gallery\pur-1');  });
Route::get('pur-2', function (){   return view('PURF_gallery\pur-2');  });
Route::get('pur-3', function (){   return view('PURF_gallery\pur-3');  });
Route::get('pur-4', function (){   return view('PURF_gallery\pur-4');  });
Route::get('pur-5', function (){   return view('PURF_gallery\pur-5');  });
Route::get('pur-6', function (){   return view('PURF_gallery\pur-6');  });
Route::get('pur-7', function (){   return view('PURF_gallery\pur-7');  });
Route::get('pur-8', function (){   return view('PURF_gallery\pur-8');  });
Route::get('pur-9', function (){   return view('PURF_gallery\pur-9');  });
Route::get('pur-10', function (){   return view('PURF_gallery\pur-10'); });

// Database
Route::view('form','registrationform');
Route::post('submit','App\Http\Controllers\formup@addData');
Route::get('showing','App\Http\Controllers\reportcontroller@show');
Route::view('add','booking');
Route::post('add','App\Http\Controllers\booking@addData');
Route::view('addev','band');
Route::post('addev','App\Http\Controllers\rule@addData');
Route::get('show','App\Http\Controllers\booking@show');
Route::any('formshow','App\Http\Controllers\transdata@showData');
// Route::get('formshow?page{id}','App\Http\Controllers\transdata@showData');

Route::get('data', function (){    return view('ccavenue\dataFrom');   });
Route::post('ccreq', 'App\Http\Controllers\formup@paymentcall');

// imageUploader
// Route::get('/upload', 'App\Http\Controllers\FileUploadController@showUploadForm');
// Route::post('/upload', 'App\Http\Controllers\FileUploadController@upload');

// search
// Route::get('search', 'App\Http\Controllers\booking@search');
Route::any('search', 'App\Http\Controllers\transdata@find');
//Route::post('search?page=2','App\Http\Controllers\transdata@find');
Route::get('extend', 'App\Http\Controllers\formup@index');
Route::post('regon', 'App\Http\Controllers\formup@register');


Route::get('emp', 'App\Http\Controllers\pdfs@showEmployees');
Route::get('/employee/pdf', 'App\Http\Controllers\pdfs@createPDF');
Route::view('pan', 'pan');

// Route::get('redirect', function(){
//     $session = session()->all();
//     return($session);
// });

Route::get('logout', 'App\Http\Controllers\HomeController@logout');

// Route::get('404', function (){   return view('errors\404');  });