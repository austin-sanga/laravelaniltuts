<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class querryBuilder extends Controller
{
    // this is the method of accessing database without using modal
    // querry builder topic.
    function dboperations()
    {
        //this how it does perform the sql syntax mbalimbali using querry builder
        return DB::table('application')
        ->where('id',87)->delete();



        // update syntax
        // ->update(
        //     [
        //         'id'=>'87',
        //         'DEPTNUM'=>'123',
        //         'FAMNAME'=>'NkolidfunbI',
        //         'GIVENAME'=>'JFKNFN',
        //         'INITIALS'=>'BVC',
        //         'TITLE'=>'VDFG'
        //     ]
        // );
       
    }
}
