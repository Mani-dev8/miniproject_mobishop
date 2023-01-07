<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userauth extends Controller
{
    //
    function loginData(Request $req){
        $mail=$req->input()['login_email'];
        $req->session()->put('umail',$mail);
        return session('umail');
    }
}
    