<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interest extends Model
{
    use HasFactory;
    // this is to justify the table name
    public $table = "interest";

    //since i dont have timestamps in the database
    public $timestamps = false; 

    // this is to justify the primary key
    protected $primaryKey=('FIELDNUM');
}
