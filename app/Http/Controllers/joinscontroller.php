<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinscontroller extends Controller
{
    //This is controller for joins lesson
   function joinshow()
   {
    //    so this is how you do the joins
    // it joins the two table data which relates to one
       return DB::table('application')
       ->join('interest','application.id','=','interest.id')

    //    apart from select you can use the where function like
    // ->where('application.id',1)

    //    using the select is just a way of selecting data from one of the tables you have chosen
       ->select('interest.*')

    //    get function is for the finisher to make data come.
       ->get();
   }
}
