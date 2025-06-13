<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller

{
    //
    function show(){
        // return redirect()->to('about/user/profile');
         return to_route('hm');
    }
    function user(){
        // return redirect()->to('about/user/profile');
        return to_route('abc', ["name"=>"alpha"]);
    }
    
}
