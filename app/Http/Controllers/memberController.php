<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;

class memberController extends Controller
{
    //
    function show(){
        $data = User::paginate(5);
        // return view('member',['members'=>$data]);
        return view('list', ['users'=>$data]);
    }
}
