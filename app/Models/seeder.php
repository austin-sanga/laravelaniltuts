<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class seeder extends Model
{
    use HasFactory;

    // this where accessors they all did not work
    // look up how to use an accessor
    // accessor database to user, 
    public function getLastNameAtrribute($value)
    {
        return ucfirst($value);
    }
    public function getFirstNameAtrribute($value)
    {
        return $value. ", india";
    }
}
