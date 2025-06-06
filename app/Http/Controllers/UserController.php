<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\view;

class UserController extends Controller {
    //
    function returnView(){
        return view('user');
    }

    function adminLogin(){

        if(view::exists('admin.login')){

            return view('admin.login');

        }else{

            echo "No view found!";

        }
    }
    
}
