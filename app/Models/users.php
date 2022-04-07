<?php

// for convinience with api's dont use user.

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    // passing the actual table name for users
    public $table="user";

    // this works as a bypass of having a created at and updated at colunmn in your database.
    //AKA migration are avoided for what i saw.
    public $timestamps=false;

    //Use this to describe the primary key if it gives you error as column not found
    // this is for when doing deleting stuffs
  protected $primaryKey = "DEPTNUM";

    // this is  for when your table doesnot have a singularity.
    // public or protected $table = 'the table name';

    // here is where the mutator is being passed
    // for it to change data before its saved
    // this mutator did work
    // mutator users to database
    public function setDESCRIPAttribute($value)
    {
      $this->attributes['DESCRIP']= "IS ".$value;
    }

    // this function links to the application table
    // this makes a one to one relation
    // TO override and put your own foreign key link you have to define it in the second parameter
    public function getApplication()
    {
      return $this->hasOne('App\Models\application','DEPTNUM');
    }
    
}
