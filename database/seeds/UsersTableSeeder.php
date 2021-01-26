<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
            'name' => 'Admin Admin',
            'email' => 'admin@paper.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'password_token' => Str::random(15),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
