<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Home;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');

// Route::view('about/user/profile', 'about')->name("hm");

//Route::get('show', [Home::class,'show']);

// Route::view('home/profile/{abc}', 'home')->name('xyz');

//Route::view('form','form');
// Route::post('adduser', [AuthController::class, 'addUser']);


// Route::view('formAdvance','form-2');
// Route::post('submit', [AuthController::class, 'formTwoFun']);

/*
Route::post('relative-url/{koi b data pass kr skty h}',function($uc-data-ko-yaha-pr-accept-kiya){
    return view('jo b hmri file ka name h view filder k ander', [associative-array-mn-hm-data-bhj-dya-ic-file-mn])
    {{}} // blade template engine ka syntax h 
    // ic mn uc data ko use kr lain gy...
})
*/

// route group with prefix
/*
Route::prefix('student')->group(function(){
    Route::get('/detail',[Home::class,'detail']);
    Route::get('/profile',[Home::class,'profile']);
});
*/

// there are three ways to group routes in laravel 
// i- using prefix group
// ii- with controllers
// iii with middlewears 

/*
Route::controller(home::class)->group(function(){
    Route::get('/detail',[Home::class,'detail']);
    Route::get('/profile',[Home::class,'profile']);
    Route::get('/profile/{name}',[Home::class,'abi-tk-controller-mn-function-ni-bnaya']);
});
*/