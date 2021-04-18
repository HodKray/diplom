<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'login' => 'admin',
            'email' => 'admin@mail.com',
            'telephone'=>rand(800000000,90000000),
            'photo_user'=>'avatar_defoult.png',
            'password' => Hash::make('admin'),
            'admin' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([

            'login' => 'user',
            'email' => 'user@mail.com',
            'photo_user'=>'avatar_defoult.png',
            'telephone'=>rand(800000000,900000000),
            'password' => Hash::make('user'),
            'admin' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
