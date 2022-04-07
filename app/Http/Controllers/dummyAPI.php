<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //This is a stub generated controller
    // this is a controller for an API 
    // this controllers route is registered in the API.php
    // this is tested in the Postman

    function dummy()
    {
        return ["name"=>"anil", "email"=>"google.com"];
    }
}
