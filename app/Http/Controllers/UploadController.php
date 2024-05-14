<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $fileName = time(). "-as." . $request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('uploads', $fileName);
    }
}
