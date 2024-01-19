<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
     function getData(Request $req){
        // validate the input parameters
        $req->validate([
            'username' => "required",
            'userpassword' => "required|min:5",

        ]);
        return [ $req->input()];
    }
}
