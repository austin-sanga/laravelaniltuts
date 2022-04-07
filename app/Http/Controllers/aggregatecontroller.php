<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aggregatecontroller extends Controller
{
    //this is the controller made to serve the aggregate methods
    function operations()
    {
        // hapa you can perform functions mathematically
        // sum, avg, max, min, count
        // so you just change after the table name

        // this  is how its done in singularity
        // return DB::table('application')->count('id');

        // this is how you can retun more than one reply
        $max =  DB::table('application')->max('id');
        $min =  DB::table('application')->min('id');
        return $sata=['min'=>$min,'max'=>$max];
    }
}
