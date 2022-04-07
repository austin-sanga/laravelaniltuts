<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class mutatorController extends Controller
{
    //This feeds data in the database but we are testing it to pass through a mutator so as to be save differently
    // this page does same function as add.
    // it adds to database directly
    function mutate()
    {
        $users = new users;
        $users->DEPTNUM=999;
        $users->DESCRIP="osdcsd";
        $users->INSTNAME="sd";
        $users->DEPTNAME="ferdf";
        $users->STATE="sdfe";
        $users->POSTCODE=45; 
        $users->save();

    }
}
