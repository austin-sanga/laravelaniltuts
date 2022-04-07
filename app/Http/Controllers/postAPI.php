<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\interest;

// this class is imported for Api validation purposes
use Illuminate\Support\Facades\Validator;
 
class postAPI extends Controller
{
    //This is a stub generated controller
    function addAPI(Request $req)
    {
        // here we pass data to the interest db
        $interest = new interest;
        $interest->FIELDNUM=$req->FIELDNUM;
        $interest->id=$req->id;
        $interest->DESCRIP=$req->DESCRIP;

        // here saved data is passed into result so as to be checked
        $result= $interest->save();

        // this if statement checks if process was succes or failure
        if($result){
            return ["result"=>"Save Success"];
        }
        else
        {
            return ["result"=>"Save Failure"];
        }
        
    }

    // this is a function to pass the put API 
    // so the put api does the updating
    // tested in postman
    function updateAPI(Request $req)
    {
        // here is where what to be updated is found and passed new varables
        $interest = interest::find($req->FIELDNUM);
        $interest->id=$req->id;
        $interest->DESCRIP=$req->DESCRIP;
        $result = $interest->save();

        if($result)
        {
            return ['result'=>"data is updated"];
        }
        else{
            return ['result'=>"failed updating"];
        }
    }

    // this is passing the delete method 
    //  removes details from the database
    // tested through the postman
    function deleteAPI($FIELDNUM)
    {
        // so here it passes findind the defined variable
        // then deletes it and passes it through a check by result
        $interest = interest::find($FIELDNUM);
        $result = $interest->delete();

        if($result)
        {
            return ["reesult"=>"Record deleted"];  
        }
        else{

            return ["reesult"=>"Record deletion failed"];
        }
       
    }

    // this is for seacrching
    // searches for matches in the database
    // tested through postman
    function searchAPI($DESCRIP)
    {
        // so this is what searches for a match in database
        // to make it search in character base it need to add like querry
        // return interest::where("DESCRIP",$DESCRIP)->get();

        // here it is with a like querry
        // here it searches all the look alikes
        // character based search
        return interest::where("DESCRIP","like","%".$DESCRIP."%")->get();
    }

    // function intended for the API validation lesson
    // tested on postman
    function validateAPI(Request $req)
    {
        // here is where API condition are set at
        $rules=array(
            "FIELDNUM"=>"required | min:2 | max:4"
            
        );

        // passes through the validator class
        // which has two parameters
        $validator = Validator::make($req->all(),$rules);

        // this checks the validator and passes it through an if statment
        // if true save data, if false show error
        if($validator->fails())
        {
            // here we pass error and the sytem status
            return response()->json($validator->errors(),401) ;
        }
        else
        {
            $interest = new interest;
        $interest->FIELDNUM=$req->FIELDNUM;
        $interest->id=$req->id;
        $interest->DESCRIP=$req->DESCRIP;
        $result = $interest->save();
        
        // after saving the result is also passed through an if check
        // checks on success of the saving process
        if($result)
        {
            return ["reesult"=>"Record save"];  
        }
        else{

            return ["reesult"=>"Record saving failed"];
        }
        }
        
    }

}
 