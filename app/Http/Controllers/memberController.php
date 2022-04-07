<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class memberController extends Controller
{
    //
    function show()
    {
        // users paginate is the one ambayo inaamua data zinakaa ngapi
        // hio users ni model in sigular form refering to the database
        $data = users::paginate(5);

        // 'now here inaonesha what is to be shown to users and the transfer of data how it will be written to the users.
        return view('list',['users'=>$data]);
    }

    // This is a deleting function for data in the database
    // Have to fill in the if to be deleted by the functionm
    function delete($DEPTNUM)
    {
      

        // This is the first part of the search, this syntax does find the id 
        $data = users::find($DEPTNUM);

        // then passes it to the delete function
        $data -> delete();
        return redirect('list'); 
    }

    // Here comes a function on to edit data from the database
    function editData($DEPTNUM)
    {
        $data =  users::find($DEPTNUM);
        return view('edit', ['data'=>$data]);
    }

    // writing a function to update data in the databse
    function updateData(Request $req)
    {
        $data = users::find($req->DEPTNUM);

            // so this is the transition of data that
            // whats on database is equal to what is in front end 
        $data->DESCRIP=$req->DESCRIP;
        $data->INSTNAME=$req->INSTNAME;
        $data->DEPTNAME=$req->DEPTNAME;
        $data->STATE=$req->STATE;
        $data->POSTCODE=$req->POSTCODE; 
        $data->save();
        return redirect('list');

    }
}
