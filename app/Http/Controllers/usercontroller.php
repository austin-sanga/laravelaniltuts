<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//this is the model a link to the database
use App\Models\users;

class usercontroller extends Controller
{
    //
    function addData(Request $req)
    {
        //This declares use of the model to be in relation
        //Inaitwa kudefine instance of it
        $users = new users;

        //This mean $users relation to column of database is equal to that from the htttp request which is linked to the input name
        // all this are entries to be saved.
        $users->DEPTNUM=$req->DEPTNUM;
        $users->DESCRIP=$req->DESCRIP;
        $users->INSTNAME=$req->INSTNAME;
        $users->DEPTNAME=$req->DEPTNAME;
        $users->STATE=$req->STATE;
        $users->POSTCODE=$req->POSTCODE;

         //this save the data to the database
        $users->save();

        //this redirects  the users back to the required page
        return redirect('add');

    }
}

