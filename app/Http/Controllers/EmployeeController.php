<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    function show(){
        return DB::table('members')
        ->join('dogs',"members.id","=","dogs.id")
        ->get();
    }
}
