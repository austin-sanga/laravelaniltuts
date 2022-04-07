<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\interest;

class getAPI extends Controller
{
    //This is a stub generated controller
    // this is controller for get Data with API
    // Tested in postman

    // this function has gotten all data from database from required model and database
    function list()
    {
        return interest::all();
    }
}
