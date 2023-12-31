<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            //Admin 
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'status' => 'active',

            ],
          
              //User 
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@test.com',
                'password' => Hash::make('123456'),
                'role' => 'user',
                'status' => 'active',

            ],


        ]);

    
    }
}
