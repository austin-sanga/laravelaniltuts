<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// this is for querry builder
use Illuminate\Support\Facades\DB;

// this is for the models way
// 1st is form 1st connection
// 2nd is form 2nd connection  
use App\Models\interest;

// this 2nd connection has to be declared in its model
use App\Models\customer;


class customer2Controller extends Controller
{
    //This is a stub generated controller

    // this controller will use two databases
    function list(){

        // this is the models way 1st db connection
        // return interest::all();

        // this is the models way 2nd db connection
        return customer::all();

        // through Querry builder
        // this is calling from the first database
        // the first db connection
        // return DB::table('interest')->get();

        // through Querry builder
        // the following is from the second connection
        // the connection does show top pick data from mysql2
        // return DB::connection('mysql2')->table('customers')->get();

    }
}
