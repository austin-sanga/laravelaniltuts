<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\File;

class fileController extends Controller
{
    //This is a stub generated controller
    // its a controller to test on the file upload
    public function upload(Request $req)
    {

        $result=$req->file('style')->store('api') ;
        return ["result"=>$result] ;
    }
}
 