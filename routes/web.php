<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about',[UserController::class,'getUser']);
Route::get('/user',[UserController::class,'returnView']);

Route::get('/admin',[UserController::class, 'adminLogin']);

/*
Route::post('relative-url/{koi b data pass kr skty h}',function($uc-data-ko-yaha-pr-accept-kiya){
    return view('jo b hmri file ka name h view filder k ander', [associative-array-mn-hm-data-bhj-dya-ic-file-mn])
    {{}} // blade template engine ka syntax h 
    // ic mn uc data ko use kr lain gy...
})
*/


