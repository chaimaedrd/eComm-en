<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; //HASH TO ENCRYPT THE PASSWORD
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'chaimae',
            'email'=>'chaimae@gmail.com',
             'password'=>Hash::make('chaimae123') //HASH TO ENCRYPT THE PASSWORD
        ]);
    }
}
