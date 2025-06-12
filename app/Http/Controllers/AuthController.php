<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller{

    function addUser(Request $req){
        echo "workung";
        
        $req->validate([
            'user-name'=>'required|min:3',
            'user-email'=>'required|email'
        ],[
            "user-name.required"=>"User name should not empty"
        ]);
        
        /*
        return [
            'method'=>$req->method(),
            'fullUrl'=>$req->fullUrl(),
            'path'=>$req->path(),
            'ip'=>$req->ip(),
            'headers'=>$req->headers->all(),
            'queryParams'=>$req->query(),
            'body'=>$req->all(),
            'allFiles'=>$req->allFiles(),
            'cookies'=>$req->cookies->all(),
            'sercer'=>$req->server(),
        ];
        */
    }

    function formTwoFun(Request $req){
        echo $req['country'];
        print_r($req->hobbies);
        // return $req;
    }

}
