<?php

use App\Mail\SendMail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadPostCotroller;

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

Route::view('create-post', 'admin.create-post');

Route::post('addfile', [UploadPostCotroller::class,'save']);

Route::get('listpost', [UploadPostCotroller::class,'list']);

Route::get('editpost/{id}', [UploadPostCotroller::class,'getedit']);

Route::post('updatepost', [UploadPostCotroller::class,'updatepost']);

Route::get('deletepost/{id}', [UploadPostCotroller::class,'deletepost']);

Route::view('admindashboard', 'admin.dashboard')->name('verified');

Route::get('mail', function (){
    Mail::to('jagadees1993@gmail.com')->send(new SendMail());
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

