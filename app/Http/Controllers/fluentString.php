<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class fluentString extends Controller
{
    //This is a stub generated controller

    // this is a controller for testing of the fluentstring

    function fluent(){
        $data = "Hi this is test subject      ";

        // down here is the normal way to manipulate the data
        // this first attempt turns the first lettter to capital
        $data =Str::ucfirst($data);
        // this does replace the first word hi with hello
        $data =Str::replaceFirst('Hi',"Hello",$data);
        // This does present the data in camelcase
        $data =Str::camel($data);

        // the following is the fluent string way of doing it
        // Here is the fluent string way
        // this is how the fluent string conlions all
        $Fstring= "Hi this is test subject";
        $Fstring= Str::of($Fstring)
             ->ucfirst($Fstring)
             ->replaceFirst('Hi',"Hello",$Fstring)
             ->camel($Fstring);

        echo $data;
        
        echo $Fstring;
    }
}
