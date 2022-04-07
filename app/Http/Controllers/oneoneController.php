<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class oneoneController extends Controller
{
    //This is for a one to one relation
    function onetoone()
    {
        // this will cal from th eoriginal users table
        // return users::find(100);

        // this will call from the other table
        return users::find(100)->getApplication;

    }
}
