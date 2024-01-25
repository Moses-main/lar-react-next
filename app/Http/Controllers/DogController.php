<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;
use Illuminate\Support\Facades\Validator;


class DogController extends Controller
{
    //
    public function create(Request $request){
        // $this->validate($request,['name' => 'required']);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'about' => 'required',
            'profile_photo' => 'required|max:255',
            'cover_photo' => 'required|max:255',
            'instructor' => 'required|max:255',
            'category_id' => 'required|exists:course_categories,id',
            'rating' => 'required|integer',
            'required_user_level' => 'required|integer',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        Dog::create($request->all());

        // return redirect()->route('courses.index')->with('success', 'Course created successfully!');


        // Dog::create($request->all());

        return $request->input();
    }
}
