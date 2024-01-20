<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function index(Request $req)
    {
        $file = $req->file("file");
        // Log to see if the file is being received
        \Log::info('File:', [$file]);        
        $path = $file->store('public/uploads');

        $req->validate([
            'file' =>'required|file|mimes:jpeg,png,pdf|max:2048', // Adjust the rules as needed'
        ]);

          return "file submitted successfully";
    }
}
