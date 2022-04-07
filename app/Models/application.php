<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;
    // use this to declare a database not in singularity
    public $table = 'application';

    // function to link with the one to many test
    // link with the interest
    public function getApplication()
    {
        // you have to specify the foreign key if it does not align with syntax
        return $this->hasMany('App\Models\interest','id');
    }
}
