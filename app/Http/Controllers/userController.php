<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index() {
         
        $collections  = Http::get("https://regres.in/api/users?page=1");
        return view("users",["collections"=>$collections['data']]);
    }

}
