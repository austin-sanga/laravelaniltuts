<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seeder;

class accessorController extends Controller
{
    //hii ni accessor function deals with editing things from database to be seen different to the client.
    function index()
    {
        return seeder::all();
    }
}
