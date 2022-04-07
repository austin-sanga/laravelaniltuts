<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\application;

class onemanyController extends Controller
{
    //
    function onetomany()
    {
        // here is where the temporary insertion is done but can go through the view
        return application::find(100)->getApplication;
    }
}
