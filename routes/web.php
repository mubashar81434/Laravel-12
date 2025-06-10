<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('welcome');
});

//Route::get('/about',[UserController::class,'getUser']);
Route::get('/about', function (){
    return view('about');
});

Route::get('/user',function(){
        return view('user');
    // [ControllerKaName::class,'FunctionKaName']
});

Route::get('/form', function(){
    return view('form');
});

/*
Route::post('relative-url/{koi b data pass kr skty h}',function($uc-data-ko-yaha-pr-accept-kiya){
    return view('jo b hmri file ka name h view filder k ander', [associative-array-mn-hm-data-bhj-dya-ic-file-mn])
    {{}} // blade template engine ka syntax h 
    // ic mn uc data ko use kr lain gy...
})
*/
