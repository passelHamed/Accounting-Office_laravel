<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


//english

Route::get('/', function () {
    return view('projectEN.index');
});

Route::get('/blog', function () {
    return view('projectEN.blog');
});



// ////////////////////////////////////////////////////////////////////////////////



//arabic



Route::get('/ar', function () {
    return view('projectAR.index');
});

Route::get('/ar/blog', function () {
    return view('projectAR.blog');
});



//////////////////////////////////////////////////////////////////////////////////////



// Mail 



Route::post('/mail',[MailController::class , 'SendMail']);

