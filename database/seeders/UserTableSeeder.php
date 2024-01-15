<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            //Admin
            [
                "name"=> "Admin",
                "email"=> "admin@gmail.com",
                "password"=> Hash::make('admin'),
                "role" => "admin",
                "status" => "1",
            ],

            //Hotel Owner
            [
                "name"=> "Hotel Owner",
                "email"=> "hotel@gmail.com",
                "password"=> Hash::make('hotel'),
                "role" => "htl_ownr",
                "status" => "1",
            ],

            //User
            [
                "name"=> "User",
                "email"=> "user@gmail.com",
                "password"=> Hash::make('user'),
                "role" => "user",
                "status" => "1",
            ]
        ]);
    }
}
