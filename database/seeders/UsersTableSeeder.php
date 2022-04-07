<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// imported stuffs to facilitate
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //copied items from anil code
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'anilsidhu@doe.com',
            'password' => Hash::make('12345')
        ]);
    }
}
