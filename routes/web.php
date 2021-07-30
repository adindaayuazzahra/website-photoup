<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('user/homepage');
});

Route::get('/portofolio', function () {
    return view('user/portofolio');
});

Route::get('/acara', function () {
    return view('user/acara');
});

Route::get('/artikel', function () {
    return view('user/artikel');
});

Route::get('/artikel/viewartikel', function () {
    return view('user/viewartikel');
});

Route::get('/profil', function () {
    return view('user/profil');
});




// Route::resource('admin.pages.newartikel', 'CKEditorController');
// Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');


//Route Page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/userlist', [App\Http\Controllers\ListUserController::class, 'index']);
    Route::get('/newuser', [App\Http\Controllers\ListUserController::class, 'regis']);
});
Auth::routes(['Register'=>false]);

// //fetchData
Route::resource('users',UserController::class); 


