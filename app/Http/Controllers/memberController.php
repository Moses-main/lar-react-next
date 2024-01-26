<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
// use App\Models\User;

class memberController extends Controller
{
    //
    function addData(Request $req){
        $member = new Member();
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect("/");
    }

    function show(){
        $data = Member::all();
        return view('member', ['members' => $data]);
    }

    function delete($id){
        $data = Member::all();
        // Member::delete($id);
        Member::find($id)->delete();
        return redirect("/");
        }
}
