<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class seeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //here is how to create dummy data
        DB::table('seeders')->insert([
            'LastName'=>Str::random(10),
            'FirstName'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com'
        ]);

    }
}
