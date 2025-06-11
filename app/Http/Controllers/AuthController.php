<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    function addUser(Request $req)
    {
    //    echo "Add user function";
       return [
        'method' => $req->method(),
        'fullUrl' => $req->fullUrl(),
        'Validate'=>$req->validate([]),
        'path' => $req->path(),
        'ip' => $req->ip(),
        'isAjax' => $req->ajax(),
        'headers' => $req->headers->all(),
        'queryParams' => $req->query(),       // ?key=value
        'body' => $req->all(),                // POST data / form body
        'files' => $req->allFiles(),
        'cookies' => $req->cookies->all(),
        'server' => $req->server(),
    ];
    }
    function formTwoFun(Request $req)
    {
        echo $req['country'];
        print_r($req->hobbies);
        // return $req;
    }
}
